@extends('layouts.main-layout')
@section('head')
    <title>Index</title>
@endsection
@section('content')
    <h1>Comics: {{ count($comics) }}</h1>

    <ul>
        @foreach ($comics as $comic)
            <li>
                Title: {{ $comic -> title}}
                <br>
                Author: {{ $comic -> author }}
                <br>
                Genre: {{ $comic -> genre }}
                <br>
                Description: {{ $comic -> description }}
                <br>
                Price: {{ $comic -> price }} €
            </li>   
        @endforeach
    </ul>
@endsection
