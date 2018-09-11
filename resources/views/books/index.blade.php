<!-- All Books in Library -->
@extends('layouts.app')

@section('content')
<div class="col-md-12">
<h1 class="text-center">Library</h1>
			
			@foreach($books as $book)
				@include('books.book')	
			@endforeach
	</div>
@endsection