@extends("main.main")



@section('content')
<main>


    
    <div class="banner">        <div class="overlay">          <h1 align="center">Контакты</h1>        </div>      </div>



    <section class="map">
        <div class="container">
            @foreach($contact as $item)
          <div class="row">
            <div class="col-md-6">
              <div class="wpb_wrapper">
                <div class="hover_disable" style="display: flex">
                  <a href="mailto:alan-tailor@indox.ru">
                    <span
                      class="vc_icon_element-icon far fa-envelope icons"
                      style="
                        color: #000 !important;
                        float: left;
                        font-size: 38px;
                        margin: 0 10px 0;
                      "
                    >
                      &nbsp;
                    </span>
                  </a>
                  <span style="color: #000">

                    {!! $item->phone !!}




{!! $item->email !!}

                  </span>
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
            <div class="col-md-6">
              <div class="wpb_wrapper">
                <div class="map-addr">
                  <span>
                    <img src="/public/uploads/map.png" alt="" />
                  </span>
                  <div style="color: #000">
                    {!! $item->address !!}
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
          @endforeach
        </div>
        <!-- /.container -->

      </section>




<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
                             <script>
    ymaps.ready(function () {
        var latlist = [41.3194678, 41.3192356, 41.3195783, 41.3193455, 41.3190455, 41.31934, 41.3191234, 41.319876, 41.3190816, 41.319233];
        var gavList = [69.31922325, 69.3191223, 69.3191233, 69.3195653, 69.3192345, 69.3195433, 69.31913456, 69.3193232, 69.31942232, 69.31932222];
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
        var lat = 0, gavnitud = 0;
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
        gavnitud =  69.205782;


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
        gavnitud =  69.202174;


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
        gavnitud =  69.202603;


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
        gavnitud =  69.203039;


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
        gavnitud =  69.211112;


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
        gavnitud =  69.210194;


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
        gavnitud =  69.201653;


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
        gavnitud =  69.201460;


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
</script>
<div id="map" style="height: 400px;"></div><!-- /#map -->
<!-- <iframe src="https://www.goldenpages.uz/maps/company_maps.php?company_id=63244&lang=ru" width="1000" height="800"></iframe> -->

</main>
   
@endsection

