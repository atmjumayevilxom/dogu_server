@extends('layouts.master')

@section('meta')
    <title>{{ $category->name }}</title>
@stop

@section('content')
    <h1>{{ $category->name }}</h1>
    <ul>
        @foreach($category->products as $product)
            <li>
                <img src="{{ Voyager::image( $product->image ) }}" 
                    alt="{{ $product->name }}" 
                    width="400">
                <a href="{{ url('/products/' . $product->id) }}">{{ $product->name }}</a>
            </li>
        @endforeach
    </ul>
@stop