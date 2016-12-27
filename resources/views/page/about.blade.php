@extends('page.layout')

@section ('header')

<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

@section('content')


        <h1>Developer Information</h1>

        @foreach ($developer as $user)

         {{ $user }}

        @endforeach

@stop
