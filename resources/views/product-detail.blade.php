@extends('layouts.master')

@section('meta')
    <title>{{ $product->name }}</title>
@stop

@section('content')
    <h1>{{ $product->name }}</h1>
    <img src="{{ Voyager::image( $product->image ) }}" 
        alt="{{ $product->name }}" 
        width="400">
    <section>{!! $product->description !!}</section>
@stop