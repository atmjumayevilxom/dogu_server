@extends('layouts.master')

@section('meta')
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('css/company.css')}}">
    <title>Company</title>
@stop

@section('content')
<div class="company">
    <div class="container">
        <div class="company__about">
            <div class="company__main">
                <p class="company__text">С момента организации нашей компании в 2007 году и до сегодняшнего дня мы достигли многого с нашими дорогими клиентами и партнерами. Наш коллектив состоит из молодых и перспективных профессионалов. За время работы наша компания наладила
                    эффективную систему управления, поставок импортного оборудования и производства. Для удовлетворения требований заказчика, мы делаем свою работу качественно, быстро и в соответствии с европейскими стандартами, а также предоставляем
                    гарантии на нашу работу и оборудование. </p>
                <br>
                <p class="company__text">С 2018 года мы являемся официальными представителями завода-изготовителя DOGU Турция, г. Измир www.doguhvac.com</p>
            </div>
            <div class="company__file">
                <figure>
                    <a href="{{asset('./images/DOGU-COMPANY-FOUR-SEASONS-_рус_финал.pdf')}}" target="_blank"><img width="400" height="325" src="{{asset('./images/dogu-com.jpg')}}" alt="jpg"><i class="fas fa-link"></i></a>
                    <figcaption class="presentation">Презентация продукции, pdf, 6.5 Mb</figcaption>
                </figure>
            </div>
        </div>
    </div>
</div>
@stop
