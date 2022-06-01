<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Http;

class ApiService{

    private $apiKey;  
    private $url;

    private $headers;

    
    public function __construct(){
        $this->apiKey =  env('OMD_API_KEY');
        $this->url = 'https://www.omdbapi.com/?apikey='.$this->apiKey.'&';
    }

    public function searchMovies($movie){
        $response = http::get($this->url.'s='.$movie);
        return $response->json();
    }
    
}