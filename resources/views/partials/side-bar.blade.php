
<div class="wrapper">
    <nav id="sidebar">
        <ul class="list-unstyled components">
            <p>Last films</p>
            @foreach($lastmovies as $movie)
                <li>
                     <a href="/movies/{{$movie->id}}">{{$movie->title}}</a>
                </li>
            @endforeach
        </ul>
    </nav>

</div>

