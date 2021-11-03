@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($comics as $comic)
            <h1>{{$comic['title']}}</h1>
            <img src="{{$comic['thumb']}}" alt="">
            <p>{{$comic['series']}}</p>
            <a href="{{ route('comics.show', $comic['id']) }}">Details</a>
            <a href="{{ route('comics.edit', $comic['id']) }}">Modify</a>
            <form method="POST" action="{{ route('comics.destroy', $comic['id']) }}">
                @csrf
                @method('DELETE')
                <button type="submit">DELETE</button>
            </form>
        @endforeach
    </div>
@endsection