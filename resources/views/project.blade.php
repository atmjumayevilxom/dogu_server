@extends('layouts.master')

@section('meta')
<link rel="stylesheet" href="{{asset('css/product.css')}}">
<title>Proect</title>
@stop

@section('content')




<!-- Document Wrapper
============================================= -->
<main>
    <div class="container">
        <section class="product-text">
            <p class="text-1">{!! __('project.ООО «Европейская Климатехника» является эксклюзивным представителем в России компании DOGU HVAC, производящей климатическое оборудование под торговой маркой FOUR SEASON с 1999 года. В рамках деятельности Вашей компании предлагаем стать нашим партнером для реализации продукции марки FOUR SEASONS.') !!}
            </p>
            <p>
            {!! __('project.Мы поставляем широкий спектр систем вентиляции и промышленного кондиционирования с привлекательными условиями для дилеров:') !!}</p>
            <p class="text-2">— {!! __('project.центральные кондиционеры') !!}</p>
            <p class="text-2">— {!! __('project.комплексные установки для осушения воздуха в бассейнахс') !!}</p>
            <p class="text-2">— {!! __('project.компактные приточно-вытяжные установки различных модификаций') !!}</p>
            <p class="text-2">— {!! __('project.установки со встроенными реверсивными холодильными контурами') !!}</p>
            <p class="text-2">— {!! __('project.модульные воздухообрабатывающие установки в двадцати восьми типоразмерах') !!}</p>
            <p class="text-2">— {!! __('project.гигиенические установки модульного типа') !!}</p>
            <p class="text-2">— {!! __('project.кухонные экологические установки') !!}</p>
            <p class="text-2">— {!! __('project.надежные системы автоматизации и диспетчеризации') !!}</p>
            <p class="text-3">
            {!! __('project.Наша компания предоставляет гарантию качества продукции, используя преимущества сертификации <span>ISO 9001,ISO 14001, ISO 18001 </span> Системы центрального кондиционирования воздуха имеют сертификаты <span>EUROVENT, TUV Hygiene, CE, TSEK, ГОСТ-Р,ТС, ЕАС</span>') !!}
            </p>
        </section>
        <section class="main-center">
            <p class="text-4">{!! __('project.Наши реализованные проекты') !!}</p>
            <p class="text-5">
            {!! __('project.За время работы в России, наше оборудование было установлено на множество объектов в Москве и Московской области, а также ряде других городов России, в том числе таких как') !!} 
            </p>
            <div class="images-card">
                <h3>{!! __('project.Государственное училище (техникум) олимпийского резерва по хоккею, г. Ярославль') !!}</h3>
                <div class="img-yaroslav">
                    <img src="{{asset('images/1_1.jpg')}}" alt="alt">
                    <img src="{{asset('images/1_2.jpg')}}" alt="alt">
                </div>
                <h3>{!! __('project.Концерн ВКО «Алмаз-Антей», корпус №16, г. Санкт-Петербург') !!}</h3>
                <div class="img-san-peterburg">
                    <img src="{{asset('images/1_3.jpg')}}" alt="alt">
                    <img src="{{asset('images/1_4.jpg')}}" alt="alt">
                </div>
                <h3>{!! __('project.Центральный автовокзал, Щелковское ш., г. Москва') !!}</h3>
                <div class="img-moskva">
                    <img src="{{asset('images/1_5.jpg')}}" alt="alt">
                    <img src="{{asset('images/1_6.jpg')}}" alt="alt">
                </div>
                <div class="blog" style="margin-top: 50px">
                    <h3>{!! __('project.Агрокластер ФУД СИТИ, Калужское шоссе, г. Москва') !!}</h3>
                    <div class="img">
                        <img src="{{asset('images/4-1024x341.jpg')}}" alt="alt" class="height">
                    </div>
                </div>
                <div class="blog">
                    <h3>{!! __('project.Вешняковский рынок, г. Москва') !!}</h3>
                    <div class="img">
                        <img src="{{asset('images/1_7.jpg')}}" alt="alt">
                    </div>
                </div>
                <div class="blog">
                    <h3>{!! __('project.ФОК ЖК «Эталон», ул. Старокрымская, д. 13, г. Москва') !!}</h3>
                    <div class="img">
                        <img src="{{asset('images/1_8.jpg')}}" alt="alt">
                    </div>
                </div>
                <div class="blog">
                    <h3>{!! __('project.Штаб строительства концертного зала «Олимпийский», г. Москва') !!}</h3>
                    <div class="img">
                        <img src="{{asset('images/1_9.jpg')}}" alt="alt">
                    </div>
                </div>
                <div class="blog">
                    <h3>{!! __('project.Штаб строительства концертного зала «Олимпийский», г. Москва') !!}</h3>
                    <div class="img">
                        <img src="{{asset('images/1_10.jpg')}}" alt="alt">
                    </div>
                </div>

            </div>
        </section>
    </div>
</main>


</div>
                </div>

            </div>
        </section>
    </div>
</main>

                </div>

            </div>
        </section>
    </div>
</main>

                </div>

            </div>
        </section>
    </div>
</main>
@stop
