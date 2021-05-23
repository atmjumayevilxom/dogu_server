@extends('layouts.master')

@section('meta')
    <link rel="stylesheet" href="{{ asset('./css/categories.css') }}">
    <title>Categories</title>
@stop

@section('content')


<div class="cards">
    @foreach ($categories as $category)
    <div class="card">
        <img src="{{ Voyager::image( $category->image ) }}" alt="{{$category->name}}" class="card_image">
        <a href="{{ url('/categories/' . $category->id) }}"><span herf="#">{{$category->name}}</span></a>
    </div>
    @endforeach
</div>


@stop
