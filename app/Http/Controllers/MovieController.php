<?php

namespace App\Http\Controllers;

use App\Services\ApiService;
use Illuminate\Http\Request;
use Inertia\Inertia;


class MovieController extends Controller
{
    //

    public function searchMovie(Request $request){        
        $movieService = New ApiService;
            return Inertia::render('Movies/Movies',['movies'=>$movieService->searchMovies('jurassic park')]);         
        
    }

    public function apiSearch(Request $request){        
        $movieService = New ApiService;
        if($request->movie){
            return response()->json(['movies'=>$movieService->searchMovies($request->movie)],201);       
        }
        
    }
}