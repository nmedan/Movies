<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MoviesController extends Controller
{
    public function index() {
         $movies = Movie::all();
         return view('movies.index', compact('movies'));
    }

    public function show($id) {
         $movie = Movie::find($id);
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
