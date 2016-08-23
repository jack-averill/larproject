@extends('layout')

@section('content')

	<h1>Edit the Note</h1>

	<form method="POST" action="/notes/{{ $note->id }}">
		{{ csrf_field()}}
		{{ method_field('PATCH') }}
		<div class="form-group">
			<textarea class="form-control" name="body" id="body">{{ $note->body }}</textarea>
		</div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary">Update Note</button>
		</div>
	</form>

@stop