@extends("main.main")



@section('content')

    <div class="inner-pages-form">
        <div class="inner-pages">
            <h1 class="title">Контакты</h1>
            <ul class="breadcrumbs">
                <li><a href="/">Главная</a></li>
                <li><a href="/contact">Контакты</a></li>
            </ul>
            <br>

            <br>

            <div class="container">
                <h3 class="inner-pages-title">Основные данные</h3>
                <div class="contact-general-data">
                    @foreach ($contact as $item)
                        <div>
                            Бронирование номеров:<br>
                            <a class="links" href="tel:+7 (3463) 25-00-00">+7 (3463) 25-00-00</a><br>
                            <br>
                            Бронирование столиков: <br>
                            <a class="links" href="tel:+7 (3463) 25-13-13">+7 (3463) 25-13-13</a>
                        </div>
                        <div class="address">
                            {!! $item->address !!}
                            <div></div>
                            <br>
                            Электронная почта: <br>
                            <a class="links" href="mailto:info@royal-plaza.ru">info@royal-plaza.ru</a>
                            <div></div>
                        </div>
                        <div>
                            <br>
                            <a class="btn-call" data-toggle="modal" data-target="#exampleModal" href="">Заказать звонок
                                <svg width="23" height="14" viewBox="0 0 23 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.6364 7.63639C22.9879 7.28492 22.9879 6.71507 22.6364 6.3636L16.9088 0.636038C16.5574 0.284566 15.9875 0.284566 15.636 0.636038C15.2846 0.98751 15.2846 1.55736 15.636 1.90883L20.7272 7L15.636 12.0912C15.2846 12.4426 15.2846 13.0125 15.636 13.364C15.9875 13.7154 16.5574 13.7154 16.9088 13.364L22.6364 7.63639ZM7.86805e-08 7.9L22 7.9L22 6.1L-7.86805e-08 6.1L7.86805e-08 7.9Z"
                                        fill="#D09870" />
                                </svg>

                            </a>
                            @include('_some-parts.social')
                        </div>


                    @endforeach
                </div>


                <div style="border: 1px solid #F1F1F1; margin: 48px 0;"></div>

                <h3 class="inner-pages-title">Дополнительно</h3>

                <div class="row">
                    <div class="col-xl-5 mb-4">
                        <div class="dotted-line">
                            Бухгалтерия <i class="dots"></i> +7 (3463) 23-44-44
                        </div>
                        <div class="dotted-line">
                            Отдел кадров <i class="dots"></i> +7 (3463) 25-65-65
                        </div>
                        <div class="dotted-line">
                            Бар-менеджер
                            <i class="dots"></i>
                            bar@royal-plaza.ru
                        </div>
                        <div class="dotted-line">
                            Менеджер по снабжению
                            <i class="dots"></i>
                            buy@royal-plaza.ru

                        </div>
                        <div class="dotted-line">
                            Офис-менеджер
                            <i class="dots"></i>
                            office@royal-plaza.ru
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-xl-6">
                        <div class="dotted-line">
                            Заведующий производством
                            <i class="dots"></i>
                            pm@royal-plaza.ru
                        </div>
                        <div class="dotted-line">
                            Шеф-повар
                            <i class="dots"></i>
                            chef@royal-plaza.ru
                        </div>
                        <div class="dotted-line">
                            Руководитель службы обслуживания
                            <i class="dots"></i>
                            service@royal-plaza.ru
                        </div>
                        <div class="dotted-line">
                            Руководитель службы питания
                            <i class="dots"></i>
                            spin@royal-plaza.ru
                        </div>
                    </div>
                </div>
                <br>
                <div class="contacts">
                    <div class="contacts__row">
                        <div class="contacts__info">
                            <div class="contacts__map">
                                <input type="hidden" value='{!! $item->map !!}' name="map">
                                <div id="map" style="height: 420px; "></div>
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
                                            icon: "/img/map.png",
                                            map: map,
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

                </div>
            </div>





        </div>


        <div class="container">
            @include('_some-parts.send-email')
        </div>




        {{-- <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
        <script>
            ymaps.ready(function() {
                var latlist = [61.078706
                ];
                var gavList = [72.622871
                ];
                var i = 0;
                var myMap = new ymaps.Map('map', {
                    center: [61.078706, 72.622871],
                    zoom: 16
                }, {
                    searchControlProvider: 'yandex#search'
                });

                // Создаём макет содержимого.
                var MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                    '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
                );
                var lat = 0,
                    gavnitud = 0;
                var myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                    hintContent: 'ALAN-TAILOR ООО',
                    balloonContent: 'ALAN-TAILOR ООО'
                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#image',
                    // Своё изображение иконки метки.
                    iconImageHref: '/public/uploads/company-marker.png',
                    // Размеры метки.
                    iconImageSize: [70, 82],
                    iconImageOffset: [-24, -24],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    /*iconImageOffset: [-5, -38]*/
                });
                lat = 61.078706;
                gavnitud = 72.622871;

                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: '/i/Attractions/13.png',
                    // Размеры метки.
                    iconImageSize: [30, 40],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-24, -24],
                    // Смещение слоя с содержимым относительно слоя с картинкой.

                    // Макет содержимого.
                    iconContentLayout: MyIconContentLayout
                });

                myMap.geoObjects
                    .add(myPlacemark)
                    .add(myPlacemarkWithContent);


            });

        </script> --}}



    @endsection
