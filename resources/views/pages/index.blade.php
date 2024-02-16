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
                <button><a href=" {{ route('comics.show', $comic -> id) }}">  VAI </a></button>
                <button><a href=" {{ route('comics.edit', $comic -> id) }}">  EDIT </a></button>
                
                <form action=" {{ route('comics.destroy', $comic -> id) }} " method="POST">

                    @csrf
                    @method('DELETE')

                    <input type="submit" value="X">
                </form>

                <br> <br> 
            </li>   
        @endforeach
    </ul>

   
@endsection
