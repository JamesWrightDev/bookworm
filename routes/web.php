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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/books', 'BooksController@index');
Route::get('/books/add', 'BooksController@create');
Route::get('books/{book}', 'BooksController@show');
Route::post('/books', 'BooksController@store');

Route::get('/books/{book}/addreview', 'ReviewController@create');
// Route::post('/review', 'ReviewController@store');

