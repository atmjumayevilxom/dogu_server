  <!-- Preloading Starts -->
  <section id="preload">
      <div class="obect"></div>
      <div class="obect"></div>
      <div class="obect"></div>
      <div class="obect"></div>
      <div class="obect"></div>
      <div class="obect"></div>
      <div class="obect"></div>
      <div class="obect"></div>
  </section>
  <!-- Preloading Ends -->


  <div class="nav__in">
      <div class="container">
          <nav>
              <a href='/'><img src="{{ asset('./images/dogu-logo.jpg') }}" class="site-logo" alt="JPG"></a>
              <ul class="navbar">
                  <!--data-label is for the jQuery to recent post from the blog feed -->
                  <div class="networks">
                      <a href="#" class="phone"><i class="fas fa-phone"></i> +99890 014 70 04</a>
                      <a href="https://t.me/doguuzbekistan"><i class="fab fa-telegram icons"></i></a>
                      <a href="https://www.instagram.com/doguuzbekistan/"><i class="fab fa-instagram icons"></i></a>
                      <a href="https://www.facebook.com/doguuzbekistan"><i class="fab fa-facebook-f icons"></i></a>
                  </div>

                  <li class='drop-down'>
                      <a href="{{ route('company', session()->get('locale')) }}">
                      {!! __('navbar.Компания') !!}
                      </a>
                  </li>
                  <li class='drop-down'>
                      <a href="{{ route('category.index', session()->get('locale')) }}">
                      {!! __('navbar.ОБОРУДОВАНИЕ') !!}
                          <i class="fas fa-angle-right"></i>
                      </a>
                      <ul>
                          @foreach ($context->regular as $category)
                              <li class='sub-drop'>
                                  <a href='{{ route('category.show', ['locale' => session()->get('locale'), 'id' => $category->id]) }}'>
                                      {{ $category->name }}
                                      <i class="fas fa-angle-double-right"></i>
                                  </a>
                                  <ul>
                                      @foreach ($category->products->translate(session()->get('locale')) as $product)
                                          <li>
                                              <a href='{{ route('product.show', ['locale' => session()->get('locale'), 'id' => $product->id]) }}'>
                                                  <i class="fas fa-chevron-circle-right"></i>
                                                  {{ $product->name }}
                                              </a>
                                          </li>
                                      @endforeach
                                  </ul>
                              </li>
                          @endforeach
                      </ul>
                  </li>
                  <li class='drop-down'>
                      <a href='./categories'>
                      {!! __('navbar.ОБОРУДОВАНИЕСетевые элементы') !!}
                          <i class="fas fa-angle-right"></i>
                      </a>
                      <ul>
                          @foreach ($context->featured as $category)
                            <li>
                                <a href='{{ route('category.show', ['locale' => session()->get('locale'), 'id' => $category->id]) }}'>
                                    <i class="fas fa-chevron-circle-right"></i>
                                    {{ $category->name }}
                                </a>
                            </li>
                          @endforeach
                      </ul>
                  </li>

                    <li>
                        <form action="{{ route('set.locale') }}" method="POST">
                            @csrf
                            <select name="locale" id="lang" onchange="this.form.submit()">
                                <option value="ru"
                                    @if (session()->get('locale') === "ru")
                                        selected="selected"
                                    @endif
                                >
                                    <img src="{{ asset('./images/ru.png') }}" alt="png">
                                    RU
                                </option>
                                <option value="uz"
                                    @if (session()->get('locale') === "uz")
                                        selected="selected"
                                    @endif
                                >
                                    <img src="{{ asset('./images/uz.png') }}" alt="png">
                                    UZ
                                </option>
                            </select>
                        </form>
                    </li>
              </ul>
                <!-- The overlay -->
                <div id="myNav" class="overlay">

                    <!-- Button to close the overlay navigation -->
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                    <!-- Overlay content -->
                    <div class="overlay-content">
                        <div class="footer-items" style="padding: 50px 0px">
                            <div class="item-1">
                                <h4 class="font-00-02"><a href="./company.html">{!! __('navbar.О компании') !!}</a></h4>
                                <h4 class="font-00-02"><a href="./categories.html">{!! __('navbar.ОБОРУДОВАНИЕ') !!}</a><i class="fa fa-angle-down"></i></h4>
                                <ul class="navbar">
                                    <li><a href="./card.html">{!! __('navbar.Центральные приточно-вытяжные установки') !!}</a></li>
                                    <li><a href="./card.html"> {!! __('navbar.Компактные установки с рекуперацией') !!}</a></li>
                                    <li><a href="./card.html">{!! __('navbar.Установки для осушения воздуха в бассейне') !!}</a></li>
                                    <li><a href="./card.html">{!! __('navbar.Оборудование для кухни') !!}</a></li>
                                    <li><a href="./card.html">{!! __('navbar.Гигиенические установки') !!}</a></li>
                                    <li><a href="./card.html"> {!! __('navbar.Воздушное отопление') !!}</a></li>
                                    <li><a href="./card.html"> {!! __('navbar.Rooftop') !!}</a></li>
                                </ul>
                            </div>
                            <div class="item-1 ">
                                <h4 class="font-00-02"><a href="./categories.html">{!! __('navbar. ') !!}Сетевые элементы</a> <i class="fa fa-angle-down"></i></h4>
                                <ul class="navbar">
                                    <li><a href="./Projects.html">{!! __('navbar.Решетки') !!}</a></li>
                                    <li><a href="./Projects.html">{!! __('navbar.Диффузоры') !!}</a></li>
                                    <li><a href="./Projects.html">{!! __('navbar.Клапаны') !!}</a></li>
                                </ul>
                            </div>

                        </div>
                        <ul class="burger-nav">
                            <li class="sot_seti"><a href="https://t.me/doguuzbekistan"><i
                                        class="fab fa-telegram seti"></i></a></li>
                            <li class="sot_seti"><a href="https://www.instagram.com/doguuzbekistan/"><i
                                        class="fab fa-instagram seti"></i></a></li>
                            <li class="sot_seti"><a href="https://www.facebook.com/doguuzbekistan"><i
                                        class="fab fa-facebook seti"></i></a></li>
                        </ul>
                        <select name="lang" id="lang">
                            <option value="ru"><a href=""><img src="./images/ru.png" alt="jpg"> RU</a></option>
                            <option value="uz"><a href=""><img src="./images/uz.png" alt="jpg"> UZ</a></option>
                        </select>
                    </div>

                </div>

                <!-- Use any element to open/show the overlay navigation menu -->
                <span class="open-nav" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
          </nav>
      </div>
  </div>
