<!-- All Books in Library -->

@extends('layouts.app')

@section('content')
<div class="col-md-12 col-sm-12 ">
<h1 class="text-center">Library</h1>
			@if(session()->has('message.level'))
			    <div class="alert alert-{{ session('message.level') }}"> 
			    {!! session('message.content') !!}
			    </div>
			@endif
			<div class="row d-flex justify-content-between">
			@foreach($books as $book)

				@include('books.book')	
			@endforeach
			</div>
	</div>
@endsection