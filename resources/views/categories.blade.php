@extends('layouts.master')

@section('meta')
    <title>Categories page</title>
@stop

@section('content')
    <h1>This is categories page</h1>
    <ul>
        @foreach($categories as $category)
            <li>
                <img src="{{ Voyager::image( $category->image ) }}" 
                    alt="{{ $category->name }}" 
                    width="400">
                <a href="{{ url('/categories/' . $category->id) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
@stop