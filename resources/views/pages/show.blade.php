@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<h1>Project</h1>

<div>
    {{$project -> title}}
    <br>
    {{$project -> type}}
    <br>
    <img src="{{ asset('storage/' . $project -> image) }}" alt="" width ="300px">
</div>
@endsection
