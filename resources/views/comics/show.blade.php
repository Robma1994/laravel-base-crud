@extends('layouts.app')

@section('content')
    <div class="container">
        
        <h1>{{$details['description']}}</h1>
        <a href="{{ route('comics.index')}}">Comics All</a>
       
    </div>
@endsection