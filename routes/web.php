<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', 'MoviesController@index');

Route::get('/movies/create', 'MoviesController@create');

Route::get('/movies/{id}', 'MoviesController@show');

Route::get('/movies/genres/{genre}', 'GenresController@show');

Route::post('/movies', 'MoviesController@store');

Route::post('/movies/{id}', 'CommentsController@store');
