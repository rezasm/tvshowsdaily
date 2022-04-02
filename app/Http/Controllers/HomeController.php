<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index(){

        $apikey = env('OMDB_API_KEY');

        $url = 'http://www.omdbapi.com/?apikey=' . $apikey .'&t=the-blacklist';
        $response = Http::get($url);

        return $response;



    }
}
