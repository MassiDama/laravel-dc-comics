@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')

    <h1> COMICS </h1>
    <div>

        [ {{ $comic -> id }} ]
        <br>
        Title: {{ $comic -> title}}
        <br>
        Author: {{ $comic -> author }}
        <br>
        Genre: {{ $comic -> genre }}
        <br>
        Description: {{ $comic -> description }}
        <br>
        Price: {{ $comic -> price }} €
    </div>

    
@endsection