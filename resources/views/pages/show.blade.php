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
</div>
@endsection
