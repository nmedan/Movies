<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class GenresController extends Controller
{
    public function show($genre) {
         $movies = Movie::all()->where('genre', $genre);
         $lastmovies = Movie::all()->sortByDesc('created_at')->take(5);
         return view('movies.index', compact('movies', 'lastmovies'));
    }
}
