@extends('layouts.main-layout')
@section('content')
    <h4><a href="{{route('home')}}">Back to Home Page</a></h4>
    <h2>{{$comic['title']}}</h2>
    <h4>{{$comic['autor']}}</h4>
    <h4>{{$comic['release_date']}}</h4>
    <h5>{{$comic['pages']}}</h5>
    
@endsection