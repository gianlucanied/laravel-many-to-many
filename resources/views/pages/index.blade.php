@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<h1>Projects</h1>
<a href="{{ route('project.create') }}">Create new project</a>
<br><br>
    <ul>
        @foreach ($projects as $project)
        <a href="{{ route('project.show', $project -> id) }}">
            <li>
                {{ $project -> title}}
            </li>
        </a>

        <a href="{{ route('project.edit', $project -> id) }}">Edit</a>
            <br>
            <br>
        @endforeach
    </ul>
@endsection
