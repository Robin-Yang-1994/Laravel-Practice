@extends('page.layout')

@section('content')

	<h1>All Cars</h1>

	@foreach ($cars as $car)

		<div>
			{{$car->brand}}
		</div>

	@endforeach

@stop
