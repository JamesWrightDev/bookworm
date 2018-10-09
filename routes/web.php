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
Route::resource('review', 'ReviewController');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/books', 'BooksController@index');
Route::get('/books/add', 'BooksController@create')->middleware('auth');
Route::get('books/{book}', 'BooksController@show');
Route::post('/books', 'BooksController@store')->middleware('auth');
Route::post('/books/addlist', 'BooksController@readlist')->middleware('auth');
Route::post('/books/markread', 'BooksController@markread')->middleware('auth');

Route::get('/books/{book}/addreview', 'ReviewController@create');
Route::get('/books/{book}/editreview', 'ReviewController@edit');
Route::post('/books/addreview', 'ReviewController@store');



