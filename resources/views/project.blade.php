@extends('layouts.master')

@section('meta')
<link rel="stylesheet" href="{{asset('css/product.css')}}">
<title>Proect</title>
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
        <section class="product-text">
            <p class="text-1">ООО «Европейская Климатехника» является эксклюзивным представителем в России компании DOGU HVAC, производящей климатическое оборудование под торговой маркой FOUR SEASON с 1999 года. В рамках деятельности Вашей компании предлагаем стать
                нашим партнером для реализации продукции марки FOUR SEASONS.
            </p>
            <p>
                Мы поставляем широкий спектр систем вентиляции и промышленного кондиционирования с привлекательными условиями для дилеров:
            </p>
            <p class="text-2">— центральные кондиционеры</p>
            <p class="text-2">— комплексные установки для осушения воздуха в бассейнах</p>
            <p class="text-2">— компактные приточно-вытяжные установки различных модификаций</p>
            <p class="text-2">— установки со встроенными реверсивными холодильными контурами</p>
            <p class="text-2">— модульные воздухообрабатывающие установки в двадцати восьми типоразмерах</p>
            <p class="text-2">— гигиенические установки модульного типа</p>
            <p class="text-2">— кухонные экологические установки</p>
            <p class="text-2">— надежные системы автоматизации и диспетчеризации</p>
            <p class="text-3">
                Наша компания предоставляет гарантию качества продукции, используя преимущества сертификации
                <span>ISO 9001,ISO 14001, ISO 18001</span> Системы центрального кондиционирования воздуха имеют сертификаты
                <span>EUROVENT, TUV Hygiene, CE, TSEK, ГОСТ-Р,ТС, ЕАС</span>
            </p>
        </section>
        <section class="main-center">
            <p class="text-4">Наши реализованные проекты</p>
            <p class="text-5">
                За время работы в России, наше оборудование было установлено на множество объектов в Москве и Московской области, а также ряде других городов России, в том числе таких как
            </p>
            <div class="images-card">
                <h3>Государственное училище (техникум) олимпийского резерва по хоккею, г. Ярославль</h3>
                <div class="img-yaroslav">
                    <img src="{{asset('images/1_1.jpg')}}" alt="alt">
                    <img src="{{asset('images/1_2.jpg')}}" alt="alt">
                </div>
                <h3>Концерн ВКО «Алмаз-Антей», корпус №16, г. Санкт-Петербург</h3>
                <div class="img-san-peterburg">
                    <img src="{{asset('images/1_3.jpg')}}" alt="alt">
                    <img src="{{asset('images/1_4.jpg')}}" alt="alt">
                </div>
                <h3>Центральный автовокзал, Щелковское ш., г. Москва</h3>
                <div class="img-moskva">
                    <img src="{{asset('images/1_5.jpg')}}" alt="alt">
                    <img src="{{asset('images/1_6.jpg')}}" alt="alt">
                </div>
                <div class="blog" style="margin-top: 50px">
                    <h3>Агрокластер ФУД СИТИ, Калужское шоссе, г. Москва</h3>
                    <div class="img">
                        <img src="{{asset('images/4-1024x341.jpg')}}" alt="alt" class="height">
                    </div>
                </div>
                <div class="blog">
                    <h3>Вешняковский рынок, г. Москва</h3>
                    <div class="img">
                        <img src="{{asset('images/1_7.jpg')}}" alt="alt">
                    </div>
                </div>
                <div class="blog">
                    <h3>ФОК ЖК «Эталон», ул. Старокрымская, д. 13, г. Москва</h3>
                    <div class="img">
                        <img src="{{asset('images/1_8.jpg')}}" alt="alt">
                    </div>
                </div>
                <div class="blog">
                    <h3>Штаб строительства концертного зала «Олимпийский», г. Москва</h3>
                    <div class="img">
                        <img src="{{asset('images/1_9.jpg')}}" alt="alt">
                    </div>
                </div>
                <div class="blog">
                    <h3>Штаб строительства концертного зала «Олимпийский», г. Москва</h3>
                    <div class="img">
                        <img src="{{asset('images/1_10.jpg')}}" alt="alt">
                    </div>
                </div>

            </div>
        </section>
    </div>
</main>


@stop
