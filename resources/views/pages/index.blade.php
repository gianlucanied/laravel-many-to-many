@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
<h1>Projects</h1>
    <ul>
        @foreach ($projects as $project)
            <li>
                {{ $project -> title}}
                    <br>
                        <ul>
                        @foreach ($project -> technologies as $technology)
                            <li>
                                {{ $technology -> name }}
                            </li>
                        @endforeach
                        </ul>
            </li>
        @endforeach
    </ul>
@endsection
