@extends('layouts.master')

@section('content')
<div class="container">
        @foreach($movies as $movie)
            <div class="blog-post">
               <h2 class="blog-post-title"><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></h2>
               <p>{{$movie->storyline}}</p>
            </div>
        @endforeach
</div>
@endsection
