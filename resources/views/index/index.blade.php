@extends("main.main-header")

{{-- @section('slider')
    @include("lib.slider")
@endsection --}}

@section('content')

    <section class="section about-plaza">
        <div class="container">
            <h2 class="title-section">
                Отель «Роял Плаза» <br>
                Гостиница премиум-класса в Нефтеюганске
            </h2>
            <div class="row">
                <div class="col-xl-6">
                    <h6 class="title"> Сайт гостиницы «Royal Plaza» г. Нефтеюганск приглашает приятно провести время!</h6>
                    <div>
                        <ul>
                            <li><b>С нами удобно </b>– мы находимся всего в 10 минутах езды от центра города.</li>
                            <li><b>У нас уютно</b> – Роял Плаза расположен в чистом и спокойном районе с хорошо развитой
                                инфраструктурой.</li>
                            <li>
                                <b>Только максимальный комфорт</b> – в Роял Плаза работают кафе, бары, ресторан,
                                конференц-залы,
                                сигарная комната, сауна, массажный кабинет и многое другое. В Вашем распоряжении комфортные
                                номера, в которых отдых превращается в райское наслаждение.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6">
                    <img src="/uploads/about-main.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="services-main-page-wrapper">
        <div class="container">
            <div class="under-title">
                С теплом о вас
            </div>
            <h2 class="title-section">
                Мы заботимся о каждом госте, <br>
                поэтому к Вашим услугам:
            </h2>
            <div class="row services-main-page">
                <div class="col-xl-4">
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/img/sprite.svg#brainstorming"></use>
                    </svg>
                    <div>помощники для организации любого мероприятия</div>
                </div>

                <div class="col-xl-4">
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/img/sprite.svg#presentation"></use>
                    </svg>
                    <div>аренда презентационного оборудования</div>
                </div>


                <div class="col-xl-4">
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/img/sprite.svg#clothes-donation"></use>
                    </svg>
                    <div>быстрая и качественная химчистка одежды</div>
                </div>

                <div class="col-xl-4">
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/img/sprite.svg#chat"></use>
                    </svg>
                    <div>услуги профессионального переводчика для проведения переговоров с иностранными партнерами
                    </div>
                </div>

                <div class="col-xl-4">
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/img/sprite.svg#car"></use>
                    </svg>
                    <div>трансфер по Ханты-Мансийскому автономному округу и за его пределами в комфортабельных
                        автомобилях премиум-класса</div>
                </div>

                <div class="col-xl-4">
                    <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <use xlink:href="/img/sprite.svg#minibus-trip"></use>
                    </svg>
                    <div>для группы постояльцев мы предлагаем поездку в микроавтобусах Мерседес</div>
                </div>

            </div>
        </div>
    </section>

    <section class="slider-main-page">
        <div class="container">
            <div class="under-title">
                Комфортно — всегда
            </div>
            <h2 class="title-section">
                Наши номера
            </h2>

            <div class="btn-arrows">
                <button class="prev-btn"><svg>
                        <use xlink:href="/img/sprite.svg#prev"></use>
                    </svg></button>
                <button class="next-btn"><svg>
                        <use xlink:href="/img/sprite.svg#next"></use>
                    </svg></button>
            </div>

            <div style="clear: both;"></div>

            <div class="slider-hotels slick">
                @foreach ($hotels as $val)
                    <div class="slide row" data-title="{{ $val->title }}">
                        <div class="slide-text col-xl-6">
                            <div class="dots"></div>
                            {{-- <h3 class="slide-text-title">{{ $val->title }}</h3> --}}
                            <div class="slide-text-description">{!! $val->description !!}</div>
                            <a href="{{ route('hotel-detail', $val->slug) }}" class="orange-btn">Подробнее</a>
                        </div>
                        <div class="col-xl-6">
                            <div class="flexslider {{ count($val->getMediaLibrary()) === 0 ? 'hide-nav' : '' }}">
                                <ul class="slides">
                                    <li>
                                        <a data-fancybox="hotel-{{ $val->slug }}" href="{{ $val->getImage('big') }}">
                                            <img style="width: 100%; margin: auto; display: block;"
                                                src="{{ $val->getImage() }}" alt="" loading="lazy">
                                        </a>
                                    </li>

                                    @foreach ($val->getMediaLibrary() as $val2)
                                        <li>
                                            <a data-fancybox="hotel-{{ $val->slug }}"
                                                href="{{ $val2->getImage('big') }}">
                                                <img loading="lazy" style="width: 100%; margin: auto; display: block;"
                                                    src="{{ $val2->getImage() }}" alt="">
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>



                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="slider-main-page-restourants section">
        <div class="container">
            <div class="under-title">
                От стандарта до люкс
            </div>
            <h2 class="title-section">
                Рестораны и бары
            </h2>

            <div class="btn-arrows">
                <button class="prev-btn"><svg>
                        <use xlink:href="/img/sprite.svg#prev"></use>
                    </svg></button>
                <button class="next-btn"><svg>
                        <use xlink:href="/img/sprite.svg#next"></use>
                    </svg></button>
            </div>

            <div style="clear: both;"></div>
            <p>Любой вечер, проведённый в легендарном ресторане «Савой», будь то романтический ужин или роскошный <br>
                банкет,
                подарит гостям незабываемые впечатления. Лобби-бар «Эрмитаж» привлекает своей лёгкостью</p>

            <br>
            <div class="slider-bars slick" data-per-slide="4">
                @foreach ($news as $val)
                    <div class="slide">
                        <div class="borders"></div>
                        <a data-fancybox="bars" href="{{ $val->getImage('big') }}">
                            <img style="max-width: 100%; margin: auto; display: block;"
                                data-lazy="{{ $val->getImage() }}" alt="">
                        </a>
                        <div class="slider-bars-overlay">
                            <h5 class="title">{{ $val->title }}</h5>
                            <div class="slide-text-description">{!! $val->anonce !!}</div>
                            <a class="link" href="{{ route('newsdetail', $val->slug) }}"></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section events">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 align-self-center">
                    <h2 class="title-section">Мероприятия</h2>
                    <br>
                    <p></p>
                    <div class="events-dots"></div>
                    <p>Таким образом, курс на социально-ориентированный национальный проект обеспечивает актуальность
                        всесторонне сбалансированных нововведений.
                        Соображения высшего порядка, а также начало повседневной работы по формированию позиции обеспечивает
                        актуальность ключевых</p>
                </div>
                <div class="col-xl-7">
                    <div class="slick-arrow-container">
                        <button class="prev-btn"><img src="\img\arrow-left-black.png" alt=""></button>
                        <button class="next-btn"><img src="\img\arrow-right-black.png" alt=""></button>
                    </div>
                    <div class="slick" data-parent-dots=".events-dots">
                        @foreach ($services as $val)
                            <div class="slide" data-title="{{ $val->title }}">
                                <div class="borders"></div>
                                <a data-fancybox="events" href="{{ $val->getImage('big') }}"><img
                                        style="max-width: 100%; margin: auto; display: block;"
                                        data-lazy="{{ $val->getImage('smaller') }}" alt=""></a>
                                <div class="slider-bars-overlay">
                                    {{-- <div class="slide-text-description">{!! $val->anonce !!}</div> --}}
                                    <a class="link" href="{{ route('newsdetail', $val->slug) }}"></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="suggestions" class="section suggestions">
        <div class="container">
            <div class="slick" data-parent-dots=".suggestions-dots">
                @foreach ($suggestions as $val)
                    <div class="slide" data-title="{{ $val->title }}">
                        <div class="row">
                            <div class="col-xl-7">
                                <a data-fancybox="SPEC" href="{{ $val->getImage('big') }}">
                                    <img style="max-width: 100%; margin: auto; display: block;"
                                        data-lazy="{{ $val->getImage('smaller') }}" alt="">
                                </a>
                                <div class="slick-arrow-container">
                                    <button class="prev-btn"><img src="\img\arrow-left-black.png" alt=""></button>
                                    <button class="next-btn"><img src="\img\arrow-right-black.png" alt=""></button>
                                </div>
                            </div>
                            <div class="col-xl-5 align-self-center">
                                <h2 class="title-section">Специальные предложения </h2>
                                <div class="suggestions-dots"></div>
                                {!! $val->text !!}
                                <div class="slider-bars-overlay">
                                    <div class="slide-text-description">{!! $val->anonce !!}</div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="section main-page-form">
        <div class="container">
            <h2 class="title-section text-white">
                Остались вопросы? Напишите нам
            </h2>
            <p class="title-description">Мы свяжемся с вами в ближайшее время</p>
            <br>
            <form class="form" action="{{ route('email') }}" method="POST">
                @csrf
                <input name="name" type="text" placeholder="Ваше имя">
                <input name="tel" type="tel" placeholder="Телефон или эл. почта">
                <textarea name="msg" placeholder="Сообщение"></textarea>
                <p></p>
                <br>
                <div class="d-xl-flex">
                    <button class="orange-btn" type="submit">Отправить</button>
                    <div class="politics">Нажимая кнопку «Отправить» я подтверждаю, что ознакомился полностью согласен с
                        <span data-toggle="modal" data-target="#politics">Политикой конфиденциальности</span>
                        и
                        <span data-toggle="modal" data-target="#user-cond">
                            Согласием на обработку персональных данных</span>
                    </div>
                </div>

            </form>
        </div>
    </section>

    @foreach ($contact as $item)
        <section id="contacts" class="section map">
            <div class="container">
                <div class="white-box"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="under-title">Мы рядом</div>
                        <h3 class="title-section ">Контакты</h3>
                    </div>
                    <div class="col-xl-4">
                        @include("_some-parts.contact-info")
                        <br>
                        <p></p>
                        <a href="" data-toggle="modal" data-target="#exampleModal" class="orange-btn">Заказать звонок</a>
                        <br>
                        <p></p>
                        <br>
                        <div>
                            <div class="social-title">Мы в социальных сетях:</div>

                            @include('_some-parts.social')
                            <br>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="contacts__map">
                            <input type="hidden" value='{!! $item->map !!}' name="map">
                            <div id="map" style="height: 427px; "></div>
                            <script>
                                var marker;

                                function initMap() {
                                    var uluru = {
                                        lat: -25.363,
                                        lng: 131.044,
                                    };
                                    var mapCoord = document.querySelector('[name="map"]').value
                                    if (mapCoord) {
                                        uluru = JSON.parse(mapCoord);
                                    }

                                    var map = new google.maps.Map(document.getElementById('map'), {
                                        zoom: 14,
                                        center: uluru
                                    });

                                    marker = new google.maps.Marker({
                                        map: map,
                                        icon: "/img/map.png",
                                        draggable: true,
                                        position: uluru
                                    });
                                }

                            </script>
                            <script async defer
                                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgJ3vc67_ZY5OD9lHJi3tvLqHdho3kEts&callback=initMap">
                            </script>
                        </div>
                    </div>
                </div>
        </section>
    @endforeach

    <section class="section text-center reviews-wrapper">
        <div class="container">
            <h3 class="title-section text-center">Отзывы на Booking</h3>
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    <img src="/img/booking.png" alt="" style="margin-bottom: 20px;">
                    <div class="position-relative">
                        <button class="prev-btn">

                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                                class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512">
                                <path fill="currentColor"
                                    d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                                </path>
                            </svg>
                        </button>
                        <button class="next-btn">

                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                                class="svg-inline--fa fa-chevron-right fa-w-10" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path fill="currentColor"
                                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                </path>
                            </svg>
                        </button>
                        <div class="slick" data-parent-dots=".reviews-dots">
                            @foreach ($reviews as $val)
                                <div class="slide">
                                    <div class="reviews">
                                        <div></div>
                                        <div class="stars">{{ $val->stars }}</div>
                                        <h6 class="title">{{ $val->title }}</h6>
                                        <div class="description"> {!! $val->description !!}</div>
                                        <div class="date">{!! $val->created_at->format('M D Y') !!}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="reviews-dots"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
