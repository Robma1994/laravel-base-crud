@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Description</h1>
        <p>{{$details['description']}}</p>
        <a href="{{ route('comics.index')}}">Comics All</a>
    </div>
@endsection