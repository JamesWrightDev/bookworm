@extends('layouts.app')

@section('content')

<h1>Add a Review</h1>
<div class="col-md-8">
	<form method="POST" action="/review">
		{{csrf_field()}}
		
		<div class="form-group">
			<label for="title">Title</label>
			<input class="form-control" type="text" name="title" id="title">
		</div>
		<div class="form-group">
			<label for="body">Review:</label>
			<textarea class="form-control" name="body" id="body" ></textarea>
		<div class="form-group">
		 	 <button type="submit" class="btn btn-primary">Add Review</button>
		  </div>
		
	</form>
</div>

@endsection