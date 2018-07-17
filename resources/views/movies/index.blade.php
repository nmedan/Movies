@extends('layouts.master')

@section('content')
<div class="container">
<h3>Movies</h3>
    <table>
        <tr>
                <td><b>Title</b></td>
                <td><b>Storyline</b></td>
        </tr>
        @foreach($movies as $movie)
            <tr>
                <td><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></td>
                <td>{{$movie->storyline}}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection