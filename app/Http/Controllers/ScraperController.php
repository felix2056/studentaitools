<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ScraperController extends Controller
{
    public function index()
    {
        // $ch = curl_init();
        // $url = 'https://headers.scrapeops.io/v1/browser-headers?api_key=5462e102-0d9b-4af5-a66e-31c57d6e8d49&num_headers=2';

        // // Set URL
        // curl_setopt($ch, CURLOPT_URL, $url);

        // // Configure Request
        // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        // curl_setopt($ch, CURLOPT_HEADER, FALSE);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        // // Make Request
        // $response = curl_exec($ch);

        // // Close curl 
        // curl_close($ch);

        // $headers = json_decode($response, true);

        $headers = [
            'upgrade-insecure-requests' => '1',
            'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Windows; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.114 Safari/537.36',
            'accept' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
            'sec-ch-ua' => '"Not;A)Brand";v="99", "Google Chrome";v="103", "Chromium";v="103"',
            'sec-ch-ua-mobile' => '?0',
            'sec-ch-ua-platform' => '"Windows"',
            'sec-fetch-site' => 'none',
            'sec-fetch-mod' => '',
            'sec-fetch-user' => '?1',
            'accept-encoding' => 'gzip, deflate, br',
            'accept-language' => 'bg-BG,bg;q=0.9,en-US;q=0.8,en;q=0.7'
        ];
        
        $client = new Client();
        
        $website = $client->request('GET', 'https://web.archive.org/web/20231118132832/https://topai.tools/s/StudentM-AI-tool', $headers);
        
        return $website->html();
    }
}
