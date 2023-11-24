<?php

namespace App\Spiders;

use Generator;
use RoachPHP\Downloader\Middleware\RequestDeduplicationMiddleware;
use RoachPHP\Downloader\Middleware\UserAgentMiddleware;
use RoachPHP\Extensions\LoggerExtension;
use RoachPHP\Extensions\StatsCollectorExtension;
use RoachPHP\Http\Request;
use RoachPHP\Http\Response;
use RoachPHP\Spider\BasicSpider;
use RoachPHP\Spider\ParseResult;

class TopAITools extends BasicSpider
{
    public array $startUrls = [
        //
    ];

    public array $downloaderMiddleware = [
        RequestDeduplicationMiddleware::class,
    ];

    public array $spiderMiddleware = [
        //
    ];

    public array $itemProcessors = [
        //
    ];

    public array $extensions = [
        LoggerExtension::class,
        StatsCollectorExtension::class,
    ];

    public int $concurrency = 2;

    public int $requestDelay = 5;

    /** @return Request[] */
    protected function initialRequests(): array
    {
        $requestHeaders = [
            'PostmanRuntime/7.35.0',
            // 'Mozilla/5.0 (iPad; CPU OS 12_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148',
            // 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.83 Safari/537.36',
            // 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36'
        ];

        return [
            new Request(
                'GET',
                'https://web.archive.org/web/20231118132832/https://topai.tools/s/StudentM-AI-tool',
                // 'https://roach-php.dev/docs/spiders',
                // Specify a different parse method for 
                // the intial request.
                [$this, 'parseOverview'],

                // Specify a different user agent for
                // the initial request.
                [
                    'debug' => true,
                    'headers' => [
                        'Accept' => '*/*',
                        'Accept-Encoding' => 'gzip, deflate',
                        'Accept-Language' => 'en-US,en;q=0.9',
                        'Cache-Control' => 'no-cache',
                        'Connection' => 'keep-alive',
                        'Cookie' => 'Pycharm-60777de3=de261dba-9b53-42e9-8d05-af95e36004ce; AMCV_1BAA15F354F731E60A4C98A4%40AdobeOrg=-1124106680%7CMCMID%7C33561743442233410790442333376194105525%7CMCAAMLH-1691325085%7C6%7CMCAAMB-1691325085%7CRKhpRz8krg2tLO6pguXWp5olkAcUniQYPHaMWWgdJ3xzPWQmdj0y%7CMCCIDH%7C-473904930%7CMCOPTOUT-1690727485s%7CNONE%7CvVersion%7C5.2.0; cc_cookie=%7B%22categories%22%3A%5B%22essential%22%2C%22analytics%22%2C%22content%22%5D%2C%22revision%22%3A0%2C%22data%22%3Anull%2C%22consentTimestamp%22%3A%222023-09-13T08%3A37%3A35.127Z%22%2C%22consentId%22%3A%227dea62dc-3d4e-4962-8eb5-1acef6894c73%22%2C%22services%22%3A%7B%22essential%22%3A%5B%5D%2C%22analytics%22%3A%5B%5D%2C%22content%22%3A%5B%5D%7D%2C%22lastConsentTimestamp%22%3A%222023-09-13T08%3A37%3A35.127Z%22%7D; _ga=GA1.1.1214854225.1694595003; _uetvid=9fce1c90b34f11ec8d8181ec33d28c56; _gcl_au=1.1.1746003872.1695033570; G_ENABLED_IDPS=google; returned_user=y; _ga_0B16WY7WK3=GS1.1.1695546637.4.1.1695546704.0.0.0; reject=ref100; pma_lang=en; _ga_HGW3HGWVCS=GS1.1.1699386600.11.1.1699386901.22.0.0; phpMyAdmin=94a005748f1415202205aceec3e79988; ci_icc_session_cookie=brqnce8rh826d3dn3bt07k2tlbjaponl; pmaUser-1=SC5AbxP9rc7MDRP8q8QHq%2FWhAREC41ZgIa4BcLw6eOzQFWA6%2BUVIpVWT9S6cSrk%3D; pmaAuth-1=Foiu0UWaZETkDF39Jg953IjWTzyw44B4h3jT%2Bg5nCw9piixLsiyXNT9bcyTVQ2Gh5YILP%2FYX2MJi9y5GUkNICwx%2Fxie6rZfJyJYuST4hOXMcC5tKnZFO3w%3D%3D',
                        'Host' => 'topai.tools',
                        'Origin' => 'https://topai.tools',
                        'Referer' => 'https://topai.tools/s/StudentM-AI-tool',
                        'Postman-Token' => 'b1b0b8e0-4b9e-4b9e-8b0a-9b0b9b0b9b0b',
                        'Sec-Fetch-Dest' => 'empty',
                        'Sec-Fetch-Mode' => 'cors',
                        'Sec-Fetch-Site' => 'same-origin',
                        'User-Agent' => $requestHeaders[array_rand($requestHeaders)],
                        'sec-ch-ua' => '"Google Chrome";v="119", "Chromium";v="119", "Not?A_Brand";v="24"',
                        'sec-ch-ua-mobile' => '?0',
                        'sec-ch-ua-platform' => '"Windows"',
                    ]
                ]
            ),
        ];
    }

    public function parseOverview(Response $response): \Generator
    {
        // echo headers
        // echo $response->getStatusCode();
        return true;
        // We’re only interested in the overview page 
        // because we can extract the links we’re 
        // actually interested in from it.
        $urls = $response->filterXPath('//a[@class="search-doctor-actions__link search-doctor-actions__link--booking popup-window btn_main_fi"]')->each(function ($node) {
            return 'https://www.findatopdoc.com' . $node->attr('data-popup-url');
        });

        // We’re only interested in the first 10 pages
        // $urls = array_slice($urls, 0, 10);

        
        foreach ($urls as $page) {
            // Since we’re not specifying the second parameter, 
            // all article pages will get handled by the 
            // spider’s `parse` method.
            yield $this->request('GET', $page);
        }
    }

    /**
     * @return Generator<ParseResult>
     */
    public function parse(Response $response): Generator
    {
        // todo...
    }
}
