@extends('layouts.app')

@section('content')
    <form action="{{ route('comics.update', $editComic['id']) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="title">TITLE</label>
        <input type="text" name="title" id="title" placeholder="add title" value="{{$editComic['title']}}">
        <label for="description">DESCRIPTION</label>
        <input type="text" name="description" id="title" placeholder="add description" value="{{$editComic['description']}}">
        <label for="thumb"> THUMB</label>
        <input type="text" name="thumb" id="thumb" placeholder="add thumb" value="{{$editComic['thumb']}}">
        <label for="price">PRICE</label>
        <input type="text" name="price" id="price" placeholder="add price" value="{{$editComic['price']}}">
        <label for="series">SERIES</label>
        <input type="text" name="series" id="series" placeholder="add series" value="{{$editComic['series']}}">
        <label for="sale_date">SALE DATE</label>
        <input type="text" name="sale_date" id="sale_date" placeholder="add sale date" value="{{$editComic['sale_date']}}">
        <label for="type">TYPE</label>
        <input type="text" name="type" id="type" placeholder="add type" value="{{$editComic['type']}}">
        <input type="submit" value="Add">
    </form>
@endsection