@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')

    <h1> NEW COMIC </h1>

    <br><br>

    <form action=" {{ route('comics.store')}} " method="POST">

        @csrf
        @method('POST')

        <label for="title"></label>
        <input type="text" placeholder="Title" name="title" id="title">

        <label for="author"></label>
        <input type="text" placeholder="Author" name="author" id="author">

        <label for="genre"></label>
        <input type="text" placeholder="Genre" name="genre" id="genre">

        <label for="description"></label>
        <input type="text" placeholder="Description" name="description" id="description">

        <label for="price"></label>
        <input type="text" placeholder="Price" name="price" id="price">

        <br><br>

        <input type="submit" value="CREATE"> 

    </form>

    
@endsection