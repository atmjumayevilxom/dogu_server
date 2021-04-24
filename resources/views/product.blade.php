@extends('layouts.master')

@section('meta')

<link rel="stylesheet" href="{{asset('css/Projects.css')}}">
<title>{{ $product->name }}</title>

@stop
@section('content')

    <!-- Document Wrapper
============================================= -->

<div class="continer">
    <div class="hedir">
        <img src="{{ Voyager::image( $product->image ) }}" alt="{{ $product->name }}">
    </div>
    <div class="main">
        <p>{!! $product->description !!}</p>
    </div>
</div>
@stop
