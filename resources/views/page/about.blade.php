@extends('page.layout')

@section ('header')

<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

@section('content')

        @unless (empty($people))

        <h1>There is name.</h1>

        @endunless

        @foreach ($people as $person)

         {{ $person }} 

        @endforeach

@stop
