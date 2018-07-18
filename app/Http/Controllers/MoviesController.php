<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MoviesController extends Controller
{
    public function index() {
         $movies = Movie::all();
         $lastmovies = Movie::all()->sortByDesc('created_at')->take(5);
         return view('movies.index', compact('movies', 'lastmovies'));
    }

    public function show($id) {
         $movie = Movie::with('comments')->findOrFail($id);
         return view('movies.single-movie', compact('movie'));
    }

    public function create() {
        return view('movies.create');
    }

    public function store() {
         $this->validate(request(), ['title'=>'required', 'genre'=>'required', 'year'=>'integer|between:1900,2018', 'storyline'=>'max:1000']);
         Movie::create([
            'title' => request('title'),
            'genre' => request('genre'),
            'year' => (int)request('year'),
            'director'=>request('director'),
            'storyline'=>request('storyline')
         ]);
         return redirect('/movies');
    }
}
