@extends('layouts.master')

@section('meta')
<!-- Document Title
============================================= -->

<title>DOGU</title>

@stop
@section('content')

<header>
    <!-- Swiper -->
    <div class="swiper-container2 mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide swiper-backslide">
                <div class="header__back"></div>
                <img src="{{ asset('images/slider/dogu-company.jpg') }}" alt="dogu">
                <div class="header__title">
                    Дышите вместе с <span class="caption">DOGU!</span>
                </div>
            </div>
            <div class="swiper-slide swiper-backslide">
                <div class="header__back"></div>
                <img src="{{ asset('images/slider/1.jpg') }}" alt="dogu">
                <div class="header__title">
                    Дышите вместе с <span class="caption">DOGU!</span>
                </div>
            </div>
            <div class="swiper-slide swiper-backslide">
                <div class="header__back"></div>
                <img src="{{ asset('images/slider/2.jpg') }}" alt="dogu">
                <div class="header__title">
                    Дышите вместе с <span class="caption">DOGU!</span>
                </div>
            </div>
            <div class="swiper-slide swiper-backslide">
                <div class="header__back"></div>
                <img src="{{ asset('images/slider/3.jpg') }}" alt="dogu">
                <div class="header__title">
                    Дышите вместе с <span class="caption">DOGU!</span>
                </div>
            </div>
            <div class="swiper-slide swiper-backslide">
                <div class="header__back"></div>
                <img src="{{ asset('images/slider/4.jpg') }}" alt="dogu">
                <div class="header__title">
                    Дышите вместе с <span class="caption">DOGU!</span>
                </div>
            </div>
            <div class="swiper-slide swiper-backslide">
                <div class="header__back"></div>
                <img src="{{ asset('images/slider/5.jpg') }}" alt="dogu">
                <div class="header__title">
                    Дышите вместе с <span class="caption">DOGU!</span>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</header>


    <!-- Document Wrapper
============================================= -->
    <main>
        <div class="development">
            <div class="container">
                <div class="dev-section">
                    <div class="dev-section__img">
                        <img src="{{asset('./images/four-season.png')}}" alt="JPG">
                    </div>
                    <div class="dev-section__text dev">
                        <div class="dev__title">Отдел <br>разработок</div>
                        <div class="dev__about">Компания DOGU имеет большое преимущество перед остальными участниками
                            отрасли,
                            потому что придает большое значение собственному отделу исследований и разработок.
                        </div><br>
                        <div class="dev__about">
                            На территории завода имеется три лаборатории, в которых мы проводим свои исследования и
                            находим
                            новые наиболее энергоэффективные решения для наших клиентов.
                        </div>
                        <div class="dev__comment">Самая важная миссия компании – движение вперед вместе с нашими
                            клиентами
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="catalog-product">
            <div class="container">
                <div class="catalog-product__details">
                    <div class="catalog-product__img">
                        <img src="{{asset('./images/word_fist.jpg')}}" alt="JPG">
                    </div>
                    <div class="catalog-product__text product">
                        <div class="product__title">
                            Мир дышит воздухом вместе с <span class="caption">DOGU</span>
                        </div>
                        <div class="product__about">
                            DOGU производит более 130 различных продуктов различных линеек
                        </div>
                        <div class="product__btn">
                            <a href="">
                                Полный каталог продукции <i class="fa fa-angle-double-right"
                                    style=" color: white; font-size: 14px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <section class="ag-slide-block">
        <p class="swiper_project">Наши реализованные проекты</p>

        <div class="swiper-container">
            <ul class="swiper-wrapper ag-slide_list">
                <li class="swiper-slide ag-slide_item" data-swiper-autoplay="1500" data-swiper-slide-index="0">
                    <!--data-swiper-autoplay это скорость autoplay для слайдов-->
                    <img src="{{asset('./images/1_1.jpg')}}" class="ag-slide_img" alt="">

                </li>
                <li class="swiper-slide ag-slide_item" data-swiper-autoplay="1500" data-swiper-slide-index="1">
                    <img src="{{asset('./images/1_2.jpg')}}" class="ag-slide_img" alt="">

                </li>
                <li class="swiper-slide ag-slide_item" data-swiper-autoplay="1500" data-swiper-slide-index="2">
                    <img src="{{asset('./images/1_3.jpg')}}" class="ag-slide_img" alt="">

                </li>
                <li class="swiper-slide ag-slide_item" data-swiper-autoplay="1500" data-swiper-slide-index="3">
                    <img src="{{asset('./images/1_4.jpg')}}" class="ag-slide_img" alt="">

                </li>
                <li class="swiper-slide ag-slide_item" data-swiper-autoplay="1500" data-swiper-slide-index="4">
                    <img src="{{asset('./images/1_5.jpg')}}" class="ag-slide_img" alt="">

                </li>
                <li class="ag-slide_item swiper-slide swiper-slide-prev" data-swiper-autoplay="1500" data-swiper-slide-index="5">
                    <img src="{{asset('./images/1_6.jpg')}}" class="ag-slide_img" alt="">

                </li>
                <li class="ag-slide_item swiper-slide swiper-slide-active" data-swiper-autoplay="1500" data-swiper-slide-index="6">
                    <img src="{{asset('./images/1_10.jpg')}}" class="ag-slide_img" alt="">

                </li>
                <li class="ag-slide_item swiper-slide swiper-slide-next" data-swiper-autoplay="1500" data-swiper-slide-index="7">
                    <img src="{{asset('./images/1_9.jpg')}}" class="ag-slide_img" alt="">

                </li>


            </ul>
        </div>
    </section>
    <!-- Swiper ends here -->

    <!-- logos starts here -->
    <div class="brands">
        <div class="logos">
            <div class="logos-brand">
                <div class="item-01">
                    <img src="{{ asset('images/logo/1.png')}}" alt="JPG">
                    <img src="{{ asset('images/logo/2.png')}}" alt="JPG">
                    <img src="{{ asset('images/logo/3.jpg')}}" alt="JPG">
                    <img src="{{ asset('images/logo/5.jpg')}}" alt="JPG">
                    <img src="{{ asset('images/logo/6.png')}}" alt="JPG">
                    <img src="{{ asset('images/logo/8.jpg')}}" alt="JPG">
                    <img src="{{ asset('images/logo/10.png')}}" alt="JPG">
                    <img src="{{ asset('images/logo/1.png')}}" alt="JPG">
                    <img src="{{ asset('images/logo/2.png')}}" alt="JPG">
                </div>
            </div>
        </div>
    </div>
    <!-- logos ends here -->


@stop
