<?php
namespace App\Http\Controllers;

use Google\Client;
use Google\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Exception\GuzzleException;


class GoogleFiles extends Controller
{

    /**
     * @throws GuzzleException
     */
    public function index()
    {
        $client = new Client();
        $resp = $client->getHttpClient()->get('https://www.googleapis.com/drive/v2/files');

        dd($resp->getStatusCode(), $resp->getBody());
    }

    public function store(Request $request) {
        Storage::disk('google')->put('test.txt', 'Hello World');
    }
}
