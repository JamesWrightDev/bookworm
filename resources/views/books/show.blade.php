
<!-- Individual Book Pages
	- Book details
	- Reviews
 -->

@extends('layouts.app') @section('content')
	 <h1>{{ $book->title }} </h1>
    <p>{{ $book->body }} </p>

    <hr>
    <h1>Reviews</h1>
@endsection

