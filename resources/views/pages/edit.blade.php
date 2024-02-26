@extends('layouts.main-layout')
@section('head')
    <title>Create</title>
@endsection
@section('content')
    <h1>Create new project</h1>
    <form method="POST">

    @csrf
    @method("POST")

    <label for="title">Titolo</label>
    <input type="text" name="title" id="title" value="{{ $project -> title }}">
    <br>

    <label for="type">Tipo</label>
    <input type="type" name="type" id="type" value="{{ $project -> type }}">
    <br>
    <input type="submit" value="Update">
</form>
@endsection
