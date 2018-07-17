@extends ('layouts.master')

    @section('content')
    <div class="container">
        <form method="post" action="/movies">
        {{csrf_field()}}
        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" >
            @include('partials.error-message', ['fieldName' => 'title'])
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" name="genre" class="form-control"  >
            @include('partials.error-message', ['fieldName' => 'genre'])
        </div>
        <div class="form-group">
            <label for="director">Director</label>
            <input type="text" name="director" class="form-control"  >
        </div>
        <div class="form-group">
            <label for="year">Year</label>
            <input type="text" name="year" class="form-control"  >
            @include('partials.error-message', ['fieldName' => 'year'])
        </div>
        <div class="form-group">
            <label for="body">Storyline</label>
            <input type="text" name="storyline" class="form-control" >
            @include('partials.error-message', ['fieldName' => 'storyline'])
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @endsection
