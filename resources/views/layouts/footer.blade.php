<div class="footer-clean">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="{{ asset('images/android-chrome-192x192.png') }}">
            </div>
            <div class="col-sm-4">
                <p class="title">{!! __('footer.О компании') !!}</p>
                <ul class="navbar">
                    <li><a href="{{ route('company', session()->get('locale')) }}">{!! __('footer.О компании') !!}</a></li>
                    <li><a href="{{ route('project', session()->get('locale')) }}">{!! __('footer.Проекты') !!}</a></li>
                    <li><a href="{{ route('service', session()->get('locale')) }}">{!! __('footer.Сервис') !!}</a></li>
                    <li><a href="{{ route('video', session()->get('locale')) }}">{!! __('footer.Видео') !!}</a></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <p class="title">{!! __('footer.Оборудование') !!}</p>
                <ul class="navbar">
                    <li><a href="#">{!! __('footer.Центральные приточно-вытяжные установки') !!}</a></li>
                    <li><a href="#">{!! __('footer.Компактные установки с рекуперацией') !!}</a></li>
                    <li><a href="#">{!! __('footer.Установки для осушения воздуха в бассейнах') !!}</a></li>
                    <li><a href="#">{!! __('footer.Оборудование для кухни. Фильтрация и очистка воздуха') !!}</a></li>
                    <li><a href="#">{!! __('footer.Гигиенические установки') !!}</a></li>
                    <li><a href="#">{!! __('footer.Отопление') !!}</a></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <p class="title">{!! __('footer.Сетевые элементы') !!}</p>
                <ul class="navbar">
                    <li><a href="./Projects.html">{!! __('footer.Диффузоры') !!}</a></li>
                    <li><a href="./Projects.html">{!! __('footer.Клапаны') !!}</a></li>
                    <li><a href="./Projects.html">{!! __('footer.Решетки') !!}</a></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <p class="title">{!! __('footer.Обратная связь') !!}</p>
                <ul class="navbar">
                    <li><a href="#"><i class="fas fa-phone icon-left"></i> (998) 90 014 70 04</a></li>
                    <li><a href="#"><i class="fas fa-map-marker-alt icon-left"></i>{!! __('footer.Адрес') !!}</a></li>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191884.74398343783!2d69.13928082841667!3d41.28277055677675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b0cc379e9c3%3A0xa5a9323b4aa5cb98!2z0KLQvtGI0LrQtdC90YIsIE9gemJla2lzdG9u!5e0!3m2!1suz!2s!4v1618299208274!5m2!1suz!2s"></iframe>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 item social">
            <a href="https://www.facebook.com/doguuzbekistan"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/doguuzbekistan/"><i class="fab fa-instagram"></i></a>
            <a href="https://t.me/doguuzbekistan"><i class="fab fa-telegram-plane"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="link">© 2020 -
            <script>
                document.write(new Date().getFullYear());
            </script>
            {!! __('footer.Все права защищены.') !!}
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="footer-items" style="padding: 50px 0px">
            <div class="item-1">
                <h4 class="font-00-02">{!! __('footer.О компании    ') !!} <i class="fa fa-angle-down"></i></h4>
                <ul class="navbar">
                    <li><a href="#">{!! __('footer.Центральные приточно-вытяжные установки') !!}</a></li>
                    <li><a href="#">{!! __('footer.Компактные установки с рекуперацией') !!}</a></li>
                    <li><a href="#">{!! __('footer.Установки для осушения воздуха в бассейнах') !!}</a></li>
                    <li><a href="#">{!! __('footer.Оборудование для кухни. Фильтрация и очистка воздуха') !!}</a></li>
                    <li><a href="#">{!! __('footer.Гигиенические установки') !!}</a></li>
                    <li><a href="#">{!! __('footer.Отопление') !!}</a></li>
                </ul>
            </div>
            <div class="item-1 ">
                <h4 class="font-00-02">{!! __('footer.Сетевые элементы') !!} <i class="fa fa-angle-down"></i></h4>
                <ul class="navbar">
                    <li><a href="#">{!! __('footer.Решетки') !!}</a></li>
                    <li><a href="#">{!! __('footer.Диффузоры') !!}</a></li>
                    <li><a href="#">{!! __('footer.Клапаны') !!}</a></li>
                </ul>
            </div>
            <div class="item-1 ">
                <h4 class="font-00-02">{!! __('footer.Обратная связь') !!} <i class="fa fa-angle-down"></i></h4>
                <ul class="navbar">
                    <li><a href="#"><i class="fas fa-phone icon-left"></i> (998) 90 014 70 04</a></li>
                    <li><a href="#"><i class="fas fa-map-marker-alt icon-left"></i>>{!! __('footer.Адрес') !!}</a></li>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191884.74398343783!2d69.13928082841667!3d41.28277055677675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b0cc379e9c3%3A0xa5a9323b4aa5cb98!2z0KLQvtGI0LrQtdC90YIsIE9gemJla2lzdG9u!5e0!3m2!1suz!2s!4v1618299208274!5m2!1suz!2s"></iframe>
                </ul>
            </div>
            <div class="item-1 last">
                <h4 class="font-00-02">{!! __('footer.Оборудование') !!}<i class="fa fa-angle-down "></i></h4>
                <ul class="navbar">
                    <li><a href="#">{!! __('footer.Центральные приточно-вытяжные установки') !!}</a></li>
                    <li><a href="#">{!! __('footer.Компактные установки с рекуперацией') !!}</a></li>
                    <li><a href="#">{!! __('footer.Установки для осушения воздуха в бассейнах') !!}</a></li>
                    <li><a href="#">{!! __('footer.Оборудование для кухни. Фильтрация и очистка воздуха') !!}</a></li>
                    <li><a href="#">{!! __('footer.Гигиенические установки') !!}</a></li>
                    <li><a href="#">{!! __('footer.Отопление') !!}</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- footer starts here -->


<!--call start-->
<div class="call">
    <button class="button circle pulse orange" id="myBtn">
        <img src="{{asset('images/operator-pngrepo-com.png')}}">
    </button>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="card">
                <p class="call-title">{!! __('footer.Мы можем вам перезвонить, если захотите!') !!}</p>
                <p class="call-text">{!! __('footer.Введите свой номер телефона и мы с вами свяжемся.') !!}</p>
                <form action="sendhtmlemail" method="GET">
                    <input type="text" name="name" placeholder="{!! __('footer.Ваше имя и фамилия') !!}" required>
                    <input type="text" name="number" placeholder="+ (998)" required>
                    <button class="svg-wrapper">
                        <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
                            <rect class="shape" height="60" width="320" />
                            <div class="text">{!! __('footer.попросить позвонить') !!}</div>
                        </svg>
                    </button>
                </form>
                {{-- Mail form ends --}}

            </div>
        </div>

    </div>
</div>

<div class="footer-bottom-scroll">
    <ol>
        <li>
            <a href="https://t.me/doguuzbekistan" "><i class=" fab fa-telegram-plane scroll-icon "></i></a></li>
        <li><a href="tel:+99893 042 90 90 "><i class="fa fa-phone scroll-icon "></i></a></li>
        <li><a href="mailto: ibrokhim@doguhvac.com "><i class="fas fa-envelope scroll-icon "></i></a></li>
    </ol>
</div>
{{-- @if(session()->has('message'))
    <div><img src="{{ session()->get('message') }}"></div>
@endif --}}
<script>
    [...document.querySelectorAll('.item-1')].map(item => {
        item.addEventListener('click', event => {
            event.currentTarget.classList.toggle('active');
        });
    });

    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    ////  Initialize Swiper

    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });


</script>
<!--call end-->

<!-- Go To Top
============================================= -->
<div id="go-top" class="go-top"><i class="fa fa-angle-up"></i></div>

<!-- JavaScripts
============================================= -->
<script src="{{asset('js/preload.js')}}"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('js/home-page.js')}}"></script>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/plugins.min.js')}}"></script>
<script src="{{asset('js/home-page.js')}}"></script>
<script src="{{asset('js/scroll.js')}}"></script>
<!-- Footer Scripts
============================================= -->
