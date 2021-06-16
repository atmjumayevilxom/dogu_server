@extends('layouts.master')

@section('meta')
<link rel="stylesheet" href="{{ asset('css/card.css') }}">
<title>{{ $category->name }}</title>
@stop

@section('content')



<div class="cards_2">
@foreach($category->products as $product)
        <div class="card_2 wow fadeInUp">
            <a href="{{ route('product.show', ['locale' => session()->get('locale'), 'id' => $product->id]) }}" class="set_cards">
                <img src="{{ Voyager::image( $product->image ) }}" alt="img" class="card_image_2">
                <span href="#" class="cards_title">{{$category->name}}</span>
            </a>
        </div>
        @endforeach
    </div>
@stop