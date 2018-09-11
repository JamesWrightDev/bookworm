
<!-- Individual Book Pages
	- Book details
	- Reviews
 -->

@extends('layouts.app') @section('content')
    <div class="col-md-8">
    <img class="book-cover" src="../../../covers/dune.jpg" alt="Dune Cover">
	<h1>{{ $book->title }} </h1>
    <p>Author: {{ $book->author }} </p>
    <p>Description: {{ $book->description }} </p>
    </div>
    <a href="/books/{{ $book-> id}}/addreview"><button class="btn btn-primary"> Add Review</button></a>
    <button class="btn btn-primary">Add to Reading List</button>
    <hr>
    <h1>Reviews</h1>
@endsection

