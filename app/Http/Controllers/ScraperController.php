<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ScraperController extends Controller
{
    public function screenshot(Request $request)
    {
        $url = $request->input('url');
        if (!$url) abort(404);

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
        
        $website = $client->request('GET', $url, [], [], $headers);

        // get screenshot of the website
        
    }
}
