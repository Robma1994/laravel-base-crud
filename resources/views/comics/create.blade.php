@extends('layouts.app')

@section('content')
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        @method('POST')
        
        <label for="title">TITLE</label>
        <input type="text" name="title" id="title" placeholder="add title">
        <label for="description">DESCRIPTION</label>
        <input type="text" name="description" id="title" placeholder="add description">
        <label for="thumb"> THUMB</label>
        <input type="text" name="thumb" id="thumb" placeholder="add thumb">
        <label for="price">PRICE</label>
        <input type="text" name="price" id="price" placeholder="add price">
        <label for="series">SERIES</label>
        <input type="text" name="series" id="series" placeholder="add series">
        <label for="sale_date">SALE DATE</label>
        <input type="text" name="sale_date" id="sale_date" placeholder="add sale date">
        <label for="type">TYPE</label>
        <input type="text" name="type" id="type" placeholder="add type">
        <input type="submit" value="Add">
    </form>
@endsection