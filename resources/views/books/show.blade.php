
<!-- Individual Book Pages
	- Book details
	- Reviews
 -->

@extends('layouts.app') @section('content')
    <div class="row mg-top">

        <div class="col-md-4">
        	<h1>{{ $book->title }} </h1>
            <p>Author: {{ $book->author }} </p>
            <p>Description: {{ $book->description }} </p>
        </div>
        <div class="col-md-4">
            <img class="book-cover" src="../../../covers/dune.jpg" alt="Dune Cover">
        </div>
    </div>
   
    <a href="/books/{{ $book-> id}}/addreview"><button class="btn btn-primary"> Add Review</button></a>
    <button class="btn btn-primary">Add to Reading List</button>
    <hr>
    <h1>Reviews</h1>
@endsection

