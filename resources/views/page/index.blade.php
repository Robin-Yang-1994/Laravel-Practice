@extends('page.layout')

@section('content')

	<h1>All Cars</h1>

	@foreach ($cars as $car)

		<div>
			<a href="/cars/{{$car->id}}">{{$car->brand}}</a>
		</div>

	@endforeach

@stop
