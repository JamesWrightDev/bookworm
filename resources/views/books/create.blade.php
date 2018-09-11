@extends('layouts.app')

@section('content')

<h1>Add a book</h1>
<div class="col-md-8">
	<form method="POST" action="/books" enctype='multipart/form-data'>
		{{csrf_field()}}
		
		<div class="form-group">
			<label for="title">Title</label>
			<input class="form-control" type="text" name="title" id="title">
		</div>
		<div class="form-group">
			<label for="title">Author</label>
			<input class="form-control" type="text" name="author" id="author">
		</div>
		<div class="form-group">
			<label for="title">Description:</label>
			<textarea class="form-control" name="description" id="description" ></textarea>
		</div>
		<div class="form-group">
		 	 <button type="submit" class="btn btn-primary">Add Book</button>
		  </div>
		

	</form>
</div>

@endsection