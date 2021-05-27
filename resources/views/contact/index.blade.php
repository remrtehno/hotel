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
                var latlist = [41.3194678, 41.3192356, 41.3195783, 41.3193455, 41.3190455, 41.31934, 41.3191234,
                    41.319876, 41.3190816, 41.319233
                ];
                var gavList = [69.31922325, 69.3191223, 69.3191233, 69.3195653, 69.3192345, 69.3195433, 69.31913456,
                    69.3193232, 69.31942232, 69.31932222
                ];
                var i = 0;
                var myMap = new ymaps.Map('map', {
                    center: [41.289324, 69.202405],
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
                lat = 41.288489;
                gavnitud = 69.201201;


                i = i + 1;
                myPlacemarkWithContent = new ymaps.Placemark([lat, gavnitud], {
                    hintContent: 'ЧИЛАНЗАРСКОЕ РУВД',
                    balloonContent: 'ЧИЛАНЗАРСКОЕ РУВД',

                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: '/i/Attractions/31.png',
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
                lat = 41.291714;
                gavnitud = 69.203696;


                i = i + 1;
                myPlacemarkWithContent = new ymaps.Placemark([lat, gavnitud], {
                    hintContent: 'ШКОЛА №183  г. ТАШКЕНТА',
                    balloonContent: 'ШКОЛА №183  г. ТАШКЕНТА',

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
                lat = 41.289041;
                gavnitud = 69.206528;


                i = i + 1;
                myPlacemarkWithContent = new ymaps.Placemark([lat, gavnitud], {
                    hintContent: 'ЗАГС ЧИЛАНЗАРСКОГО РАЙОНА г. ТАШКЕНТА',
                    balloonContent: 'ЗАГС ЧИЛАНЗАРСКОГО РАЙОНА г. ТАШКЕНТА',

                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: '/i/Attractions/47.png',
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
                lat = 41.289077;
                gavnitud = 69.196989;


                i = i + 1;
                myPlacemarkWithContent = new ymaps.Placemark([lat, gavnitud], {
                    hintContent: '1-Й АКАДЕМИЧЕСКИЙ ЛИЦЕЙ имени СИРОЖИДДИНОВА',
                    balloonContent: '1-Й АКАДЕМИЧЕСКИЙ ЛИЦЕЙ имени СИРОЖИДДИНОВА',

                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: '/i/Attractions/39.png',
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
                lat = 41.285931;
                gavnitud = 69.205782;


                i = i + 1;
                myPlacemarkWithContent = new ymaps.Placemark([lat, gavnitud], {
                    hintContent: 'RAYHON РЕСТОРАН - ЧИЛАНЗАР',
                    balloonContent: 'RAYHON РЕСТОРАН - ЧИЛАНЗАР',

                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: '/i/Attractions/45.png',
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
                lat = 41.285095;
                gavnitud = 69.200349;


                i = i + 1;
                myPlacemarkWithContent = new ymaps.Placemark([lat, gavnitud], {
                    hintContent: 'ШКОЛА №184  г. ТАШКЕНТА',
                    balloonContent: 'ШКОЛА №184  г. ТАШКЕНТА',

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
                lat = 41.283592;
                gavnitud = 69.202174;


                i = i + 1;
                myPlacemarkWithContent = new ymaps.Placemark([lat, gavnitud], {
                    hintContent: 'HOSILOT КАФЕ',
                    balloonContent: 'HOSILOT КАФЕ',

                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: '/i/Attractions/45.png',
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
                lat = 41.291818;
                gavnitud = 69.19463;


                i = i + 1;
                myPlacemarkWithContent = new ymaps.Placemark([lat, gavnitud], {
                    hintContent: 'БАНКЕТНЫЙ ЗАЛ АФРУЗ',
                    balloonContent: 'БАНКЕТНЫЙ ЗАЛ АФРУЗ',

                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: '/i/Attractions/45.png',
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
                lat = 41.282775;
                gavnitud = 69.202603;


                i = i + 1;
                myPlacemarkWithContent = new ymaps.Placemark([lat, gavnitud], {
                    hintContent: 'IPOTEKA BANK ЧИЛАНЗАРСКИЙ ФИЛИАЛ',
                    balloonContent: 'IPOTEKA BANK ЧИЛАНЗАРСКИЙ ФИЛИАЛ',

                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: '/i/Attractions/20.png',
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
                lat = 41.292991;
                gavnitud = 69.194801;


                i = i + 1;
                myPlacemarkWithContent = new ymaps.Placemark([lat, gavnitud], {
                    hintContent: 'UZBEKNEFTEGAZ АВТОЗАПРАВОЧНАЯ СТАНЦИЯ №34',
                    balloonContent: 'UZBEKNEFTEGAZ АВТОЗАПРАВОЧНАЯ СТАНЦИЯ №34',

                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: '/i/Attractions/24.png',
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
                lat = 41.296071;
                gavnitud = 69.203039;


                i = i + 1;
                myPlacemarkWithContent = new ymaps.Placemark([lat, gavnitud], {
                    hintContent: 'МЕЧЕТЬ ХАСАН КОРИ',
                    balloonContent: 'МЕЧЕТЬ ХАСАН КОРИ',

                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: '/i/Attractions/54.png',
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
                lat = 41.291873;
                gavnitud = 69.211112;


                i = i + 1;
                myPlacemarkWithContent = new ymaps.Placemark([lat, gavnitud], {
                    hintContent: 'PARUS СЕМЕЙНЫЙ РАЗВЛЕКАТЕЛЬНЫЙ ЦЕНТР',
                    balloonContent: 'PARUS СЕМЕЙНЫЙ РАЗВЛЕКАТЕЛЬНЫЙ ЦЕНТР',

                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: '/i/Attractions/11.png',
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
                lat = 41.283331;
                gavnitud = 69.207594;


                i = i + 1;
                myPlacemarkWithContent = new ymaps.Placemark([lat, gavnitud], {
                    hintContent: 'ТАШКЕНТСКИЙ ГОСУДАРСТВЕННЫЙ ТЕАТР МУЗЫКАЛЬНОЙ КОМЕДИИ',
                    balloonContent: 'ТАШКЕНТСКИЙ ГОСУДАРСТВЕННЫЙ ТЕАТР МУЗЫКАЛЬНОЙ КОМЕДИИ',

                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: '/i/Attractions/7.png',
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
                lat = 41.295333;
                gavnitud = 69.207687;


                i = i + 1;
                myPlacemarkWithContent = new ymaps.Placemark([lat, gavnitud], {
                    hintContent: 'ШКОЛА №179  г. ТАШКЕНТА',
                    balloonContent: 'ШКОЛА №179  г. ТАШКЕНТА',

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
                lat = 41.285326;
                gavnitud = 69.193844;


                i = i + 1;
                myPlacemarkWithContent = new ymaps.Placemark([lat, gavnitud], {
                    hintContent: 'УЗБЕКСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ МИРОВЫХ ЯЗЫКОВ',
                    balloonContent: 'УЗБЕКСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ МИРОВЫХ ЯЗЫКОВ',

                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: '/i/Attractions/14.png',
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
                lat = 41.294151;
                gavnitud = 69.210194;


                i = i + 1;
                myPlacemarkWithContent = new ymaps.Placemark([lat, gavnitud], {
                    hintContent: 'РОДИЛЬНЫЙ КОМПЛЕКС №7',
                    balloonContent: 'РОДИЛЬНЫЙ КОМПЛЕКС №7',

                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: '/i/Attractions/34.png',
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
                lat = 41.291539;
                gavnitud = 69.212106;


                i = i + 1;
                myPlacemarkWithContent = new ymaps.Placemark([lat, gavnitud], {
                    hintContent: 'XALQ BANKI АКБ ГОЛОВНОЙ ОФИС',
                    balloonContent: 'XALQ BANKI АКБ ГОЛОВНОЙ ОФИС',

                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: '/i/Attractions/20.png',
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
                lat = 41.281600;
                gavnitud = 69.201653;


                i = i + 1;
                myPlacemarkWithContent = new ymaps.Placemark([lat, gavnitud], {
                    hintContent: 'ТРЦ ATLAS НА ЧИЛАНЗАРЕ',
                    balloonContent: 'ТРЦ ATLAS НА ЧИЛАНЗАРЕ',

                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: '/i/Attractions/11.png',
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
                lat = 41.281529;
                gavnitud = 69.201460;


                i = i + 1;
                myPlacemarkWithContent = new ymaps.Placemark([lat, gavnitud], {
                    hintContent: 'MEDIA PARK - ЧИЛАНЗАР',
                    balloonContent: 'MEDIA PARK - ЧИЛАНЗАР',

                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: '/i/Attractions/11.png',
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
                lat = 41.287836;
                gavnitud = 69.21273;


                i = i + 1;
                myPlacemarkWithContent = new ymaps.Placemark([lat, gavnitud], {
                    hintContent: 'ШКОЛА №178  г. ТАШКЕНТА',
                    balloonContent: 'ШКОЛА №178  г. ТАШКЕНТА',

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
