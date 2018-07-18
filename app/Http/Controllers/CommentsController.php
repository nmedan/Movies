<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

use App\Movie;

class CommentsController extends Controller
{
    public function store($id) {
         $this->validate(request(), ['content'=>'required']);
         $movie = Movie::find($id);
         Comment::create([
            'movie_id' => $movie->id,
            'content' => request('content')
         ]);
         return redirect('/movies/{$movie->id}');
    }
}
