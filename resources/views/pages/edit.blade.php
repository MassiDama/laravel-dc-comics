@extends('layouts.main-layout')
@section('head')
    <title>Edit</title>
@endsection
@section('content')

    <h1> EDIT COMIC </h1>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <br><br>

    <form action=" {{ route('comics.update', $comic -> id)}} " method="POST">

        @csrf
        @method('PUT')

        <label for="title"></label>
        <input type="text" name="title" id="title" value="{{ $comic -> title }}">

        <label for="author"></label>
        <input type="text" name="author" id="author" value="{{ $comic -> author }}">

        <label for="genre"></label>
        <input type="text" name="genre" id="genre" value="{{ $comic -> genre }}">

        <label for="description"></label>
        <input type="text" name="description" id="description" value="{{ $comic -> description }}">

        <label for="price"></label>
        <input type="text" name="price" id="price" value="{{ $comic -> price }}">

        <br><br>

        <input type="submit" value="UPDATE"> 

    </form>

    
@endsection