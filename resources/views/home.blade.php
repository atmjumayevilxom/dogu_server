@extends('layouts.master')

@section('meta')
<!-- Document Title
============================================= -->

<title>DOGU</title>

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
        <div class="development">
            <div class="container">
                <div class="dev-section">
                    <div class="dev-section__img">
                        <img src="./images/four-season.png" alt="JPG">
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
                        <img src="./images/word_fist.jpg" alt="JPG">
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



@stop
