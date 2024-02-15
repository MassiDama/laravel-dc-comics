@extends('layouts.main-layout')
@section('head')
    <title>Index</title>
@endsection
@section('content')
    <h1>Comics: {{ count($comics) }}</h1>

    <br>

    <button><a href=" {{ route('comics.create')}} "> AGGIUNGI NUOVO COMIC</a></button>

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
                <br>
                <button><a href=" {{ route('comics.show', $comic -> id) }}">  VAI </a></button>
            </li>   
        @endforeach
    </ul>

    <br>
@endsection
