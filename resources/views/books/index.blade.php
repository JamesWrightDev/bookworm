<!-- All Books in Library -->
@extends('layouts.app')

@section('content')
<div class="col-md-12 col-sm-12 ">
<h1 class="text-center">Library</h1>
			<div class="row">
			@foreach($books as $book)
				@include('books.book')	
			@endforeach
			</div>
	</div>
@endsection