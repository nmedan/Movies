@extends('layouts.master')

@section('content')
<div class="container">
<h3>Movie details</h3>
    <div><b>Title: </b> {{$movie->title}}</div>
    <div><b>Genre: </b> {{$movie->genre}}</div>
    <div><b>Director: </b> {{$movie->director}}</div>
    <div><b>Year: </b> {{$movie->year}}</div>
    <div><b>Storyline: </b> {{$movie->storyline}}</div>
</div>
</div>
<div class="container">
  @foreach ($movie->comments as $comment)
        <div class="blog-post">
        <p class="blog-post-meta">{{$comment->created_at}}</a></p>
        <p>{{$comment->content}}</p>
        </div> 
    @endforeach
 </div>
    <div class="container">
        <form method="post" action="/movies/{{$movie->id}}">
        {{csrf_field()}}      
        <div class="form-group">
            <input type="text" name="content" class="form-control" placeholder="Add comment">
            @include('partials.error-message', ['fieldName' => 'content'])
        </div>
        <button type="submit" class="btn btn-primary">Post</button>
        </form>
    </div>
 @endsection
