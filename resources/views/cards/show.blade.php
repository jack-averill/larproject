@extends('layout') 


@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1>{{ $card->title }} </h1>
			
			<ul class="list-group">
				@foreach ($card->notes as $note)
					<li class="list-group-item">
					<a href="/notes/{{ $note->id }}/edit">{{ $note->body }}</a>
					<a href="#" class="pull-right">{{ $note->user->username }}</a>
					</li>
					
				@endforeach
			</ul>

			<hr>

			<h3>Add a New Note</h3>
			
			<form method="POST" action="/cards/{{ $card->id }}/notes">
				{{ csrf_field() }}
				<div class="form-group">
					<textarea class="form-control" name="body" id="body"></textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Add Note</button>
				</div>
			</form>
		</div>
	</div>

@stop