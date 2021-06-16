@extends('layouts.master')

@section('meta')
<link rel="stylesheet" href="{{ asset('css/card.css') }}">
<title>{{ $category->name }}</title>
@stop

@section('content')
<div class="cards_2">
    @foreach($category->products as $product)
    <a href="{{ route('product.show', ['locale' => session()->get('locale'), 'id' => $product->id]) }}" class="card_2 wow fadeInUp">
        <div>
            <img src="{{ Voyager::image( $product->image ) }}" alt="" class="card_image_2">
            <span herf="#">{{$category->name}}</span>
        </div>
    </a>
    @endforeach
</div>

@stop