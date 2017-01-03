@extends('page.layout')

@section('content')


	<h1>Cars</h1>

  <h2>{{$car->brand}}</h2>
  <h2>{{$car->year}}</h2>

	<ul class="list-group">

  @foreach ($car->informations as $information)

    <li class="list-group-item">{{$information->body}}
		<a href="#" style="float:right"> Username: {{$information->user->username}} </a></li>

  @endforeach
		</ul>


		<hr>
		<div class="form-group">
			<h3>Add new content to forum</h3>
			<form method="POST" action="/cars/{{$car->id}}/informations">
				{{csrf_field()}}
				<textarea name="body" rows="4" cols="40"></textarea>

		<div class="form-group">
				<button type="Add" class="btn btn-primary">Add</button>
		</form>
		</div>
		@if(count($errors))
			<ul>
				@foreach ($errors->all() as $error)
					{{$error}}
				@endforeach
			</ul>
		@endif
		</div>

@stop
