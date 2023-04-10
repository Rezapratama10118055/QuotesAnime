<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
   
    $client = new \GuzzleHttp\Client(['verify' => false]);
    $response = $client->request('GET', 'https://katanime.vercel.app/api/getrandom');
    $getRandomAnime = json_decode($response->getBody());
    return view('home', compact('getRandomAnime'));
    }

   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function products()
    {
   
    $client = new \GuzzleHttp\Client(['verify' => false]);
    $response = $client->request('GET', 'https://katanime.vercel.app/api/getlistanime');
    $getlistanime = json_decode($response->getBody());
    return view('products', compact('getlistanime'));
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutUs()
    {
          return view('aboutUs'); 
    }

     public function search(Request $request)
    {
    $anime = $request->input('anime');
    $page = $request->input('page');

    $client = new \GuzzleHttp\Client(['verify' => false]);

    $response = $client->get('https://katanime.vercel.app/api/getbyanime', [
        'query' => [
            'anime' => $anime,
            'page' => $page,
        ],
    ]);

    $getlist = json_decode($response->getBody(), true);

    return view('aboutUs', compact('getlist'));
    }


 }
