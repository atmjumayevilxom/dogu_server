@extends('layouts.master')

@section('meta')
<link rel="stylesheet" href="./css/categories.css">
    <title>Categories page</title>
@stop

@section('content')


<div class="cards">
    <div class="card">
        <img src="./images/item_1.jpg" alt="img" class="card_image">
        <a href="/category-detail">Центральные приточно-вытяжные установки</a>
    </div>
    <div class="card">

        <img src="./images/item_2.jpg" alt="img" class="card_image">
        <a href="#">Компактные установки с рекуперацией</a>

    </div>
    <div class="card">
        <img src="./images/item_1.jpg" alt="img" class="card_image">
        <a href="#">Установки для осушения воздуха в бассейнах</a>
    </div>
    <div class="card">
        <img src="./images/item_1.jpg" alt="img" class="card_image">
        <a href="#">Оборудование для кухни. Фильтрация и очистка воздуха</a>
    </div>
    <div class="card">
        <img src="./images/item_1.jpg" alt="img" class="card_image">
        <a href="#">Гигиенические установки</a>
    </div>
    <div class="card">
        <img src="./images/item_1.jpg" alt="img" class="card_image">
        <a href="#">Воздушное отопление</a>
    </div>
    <div class="card">
        <img src="./images/item_1.jpg" alt="img" class="card_image">
        <a href="#">Rooftop</a>
    </div>
</div>

    {{-- <h1>This is categories page</h1>
    <ul>
        @foreach($categories as $category)
            <li>
                <img src="{{ Voyager::image( $category->image ) }}"
                    alt="{{ $category->name }}"
                    width="400">
                <a href="{{ url('/categories/' . $category->id) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul> --}}
@stop
