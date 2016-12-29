@extends('page.layout')

@section('content')

	<h1>Edit Information</h1>

	<div class="form-group">
		<form method="POST" action="/informations/{{$information->id}}">
			{{method_field('PATCH')}}

			{{csrf_field()}}
			<textarea name="body" rows="4" cols="40">{{$information->body}}</textarea>

	<div class="form-group">
			<button type="Add" class="btn btn-primary">Update</button>
	</form>

@stop
