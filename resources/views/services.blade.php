@extends('layouts.master')

@section('meta')
<link rel="stylesheet" href="css/Service.css">
<title>Servis</title>

@stop
@section('content')

<header>
    <div class="header__in">
        <div class="header__title">
            Дышите вместе с <span class="caption">DOGU!</span>
        </div>
        <div class="header__back"></div>
    </div>
</header>


<!-- Document Wrapper
============================================= -->
<main>
    <div class="container">
        <p>Наша сервисная служба состоит из 9 сервисных инженеров, которые 24 часа в сутки готовы помочь нашим клиентам. При покупке нашего оборудования и заключении с нами договора на сервисное обслуживание, наши клиенты получают до 5 лет гарантии.
            Все необходимые запчасти находятся на складе в наличии.</p>
        <div class="card">
            <div class="card-img">
                <img src="{{asset('./images/1_11.jpg')}}" alt="">
            </div>
            <div class="card-icon">
                <a href="./images/1_11.jpg"><i class="fas fa-search-plus"></i></a>
            </div>
        </div>
        <div class="card">
            <div class="card-img">
                <img src="{{asset('./images/1_12.jpg')}}" alt="">
            </div>
            <div class="card-icon">
                <a href="./images/1_12.jpg"><i class="fas fa-search-plus"></i></a>
            </div>
        </div>
        <div class="card card-margin">
            <div class="card-img">
                <img src="{{asset('./images/1_13.jpg')}}" class="card-bottom" alt="">
            </div>
            <div class="card-icon">
                <a href="./images/1_13.jpg"><i class="fas fa-search-plus"></i></a>
            </div>
        </div>
        <div class="card card-margin">
            <div class="card-img">
                <img src="{{asset('./images/dogu-company.jpg')}}" class="card-bottom" alt="">
            </div>
            <div class="card-icon">
                <i class="fas fa-search-plus"></i>
            </div>
        </div>
    </div>
</main>


@stop
