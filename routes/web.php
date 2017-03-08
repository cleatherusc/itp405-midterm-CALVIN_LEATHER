<?php
use Illuminate\Support\Facades\DB;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', 'AdminController@index')->middleware('auth_group');
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::get('/books/{id}', function($id){
  return DB::select('
  SELECT reviews.headline, reviews.body, reviews.rating, books.title, authors.first_name, authors.last_name, publishers.name as publisher_name FROM books
  LEFT JOIN authors
  ON books.author_id = authors.id
  LEFT JOIN reviews
  ON reviews.book_id = books.id
  LEFT JOIN publishers
  ON publishers.id = books.publisher_id
  WHERE books.id = ?;
  ', [$id]);
});
Route::get('/books/', 'BookController@view');
