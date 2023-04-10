<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class kataController extends Controller
{
   public function getRandomAnime() {
    $client = new \GuzzleHttp\Client(['verify' => false]);
    $response = $client->request('GET', 'https://katanime.vercel.app/api/getrandom');
    $getRandomAnime = json_decode($response->getBody());
    return view('random-anime', compact('getRandomAnime'));
}
}



