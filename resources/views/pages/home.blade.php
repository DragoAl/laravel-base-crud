@extends('layouts.main-layout')
@section('content')
    <h1>Comic List</h1>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{route('show', $comic -> id)}}">
                    {{$comic -> title}}
                </a>
                - {{$comic -> autor}}
            </li>
        @endforeach
    </ul>
@endsection