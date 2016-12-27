@extends('page.layout')

@section('content')

	<h1>Cars</h1>

  <h2>{{$car->brand}}</h2>
  <h2>{{$car->year}}</h2>

  <ul>

  @foreach ($car->informations as $information)

    <li>{{$information->body}}</li>

  @endforeach

  </ul>
@stop
