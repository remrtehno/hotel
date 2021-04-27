@extends("main.main")

@section('slider')
    @include("lib.slider")
@endsection

@section('content')

    <!-- BEGIN SEARCH -->
    <div class="search">
        <div class="container">
            <!-- BEGIN CRITERIA -->
            <div class="criteria">
                <div class="criteria__header">
                    <svg>
                        <use xlink:href="img/sprite.svg#search-big"></use>
                    </svg>
                    <span>Ищите оборудование по любому из трёх критериев:</span>
                </div>
                <div class="criteria__row">
                    <a class="criteria__item  js-anchor" href="#type">
                        <p class="criteria__title">По типу изделия</p>
                        <svg>
                            <use xlink:href="img/sprite.svg#production"></use>
                        </svg>
                        <p class="criteria__txt">Например: модели органов или тренажёры</p>
                    </a>
                    <a class="criteria__item  js-anchor" href="#spec">
                        <p class="criteria__title">По специальности</p>
                        <svg>
                            <use xlink:href="img/sprite.svg#speciality"></use>
                        </svg>
                        <p class="criteria__txt">Например: акушерство или эндоскопия</p>
                    </a>
                    <a class="criteria__item  js-anchor" href="#skill">
                        <p class="criteria__title">По навыку</p>
                        <svg>
                            <use xlink:href="img/sprite.svg#skill"></use>
                        </svg>
                        <p class="criteria__txt">Например: инъекции или роды</p>
                    </a>
                </div>
            </div>
            <!-- END CRITERIA -->

            <!-- m-news-->
            <div class="m-news">
                <div class="m-news__header">
                    <div>
                        <svg>
                            <use xlink:href="img/sprite.svg#icon-news"></use>
                        </svg><span>Новости </span>
                    </div>
                </div>
                <div class="news__row">
                    <a class="news__item" href="novosti/respisim-novaya-versiya-programmnogo-obespecheniya.html">
                        <div class="news__img"><img src="img/kollazhpo-08.04.21-360x180-1d7.png"
                                alt="РеспиСим - новая версия программного обеспечения"></div>
                        <div class="news__desc">
                            <h3>РеспиСим - новая версия программного обеспечения</h3>
                            <p>Совсем скоро будет доступна версия 4.0 для симулятора РеспиСим</p>
                            <time datetime="">08&nbsp;апреля&nbsp;2021 </time>
                        </div>
                    </a>
                    <a class="news__item"
                        href="novosti/unikalnye-produkty-dlya-otrabotki-navykov-serdechno-sosudistoj-hirurgii-teper-v-nashej-linejke.html">
                        <div class="news__img"><img src="img/foto2-360x180-a9d.png"
                                alt="Уникальные продукты для отработки навыков сердечно-сосудистой хирургии теперь в нашей линейке">
                        </div>
                        <div class="news__desc">
                            <h3>Уникальные продукты для отработки навыков сердечно-сосудистой хирургии теперь в нашей
                                линейке</h3>
                            <p>Главные проблемы и направления современной хирургии прямо и непосредственно связаны с
                                хирургией сосудов</p>
                            <time datetime="">02&nbsp;апреля&nbsp;2021 </time>
                        </div>
                    </a>
                    <a class="news__item" href="novosti/otrabotka-navykov-intubacii-u-rebyonka.html">
                        <div class="news__img"><img src="img/foto2-360x180-741.png"
                                alt="Отработка навыков интубации у ребёнка"></div>
                        <div class="news__desc">
                            <h3>Отработка навыков интубации у ребёнка</h3>
                            <p>Мы представляем новый педиатрический фантом </p>
                            <time datetime="">19&nbsp;марта&nbsp;2021 </time>
                        </div>
                    </a>
                </div>
                <a class="m-news__all" href="novosti.html">Все новости</a>
            </div>
            <!-- end m-news-->

            <!-- BEGIN SEARCH-TYPE -->
            <div class="search-type" id="type">
                <div class="search-type__header">
                    <div>
                        <svg>
                            <use xlink:href="img/sprite.svg#production"></use>
                        </svg>
                        <span>По типу изделия</span>
                    </div>
                </div>
                <div class="search-type__row">

                    <div class="search-type__item">
                        <a href="roboty-simulyatory.html">
                            <div class="search-type__img">
                                <img src="img/robots.jpg" alt="Роботы симуляторы">
                            </div>
                            <div class="search-type__desc">
                                <p class="search-type__title">Роботы симуляторы</p>
                                <p class="search-type__txt">Роботы-симуляторы пациента с математической моделью физиологии
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="search-type__item">
                        <a href="virtualnye-simulyatory.html">
                            <div class="search-type__img">
                                <img src="img/simulators.jpg" alt="Виртуальные тренажеры">
                            </div>
                            <div class="search-type__desc">
                                <p class="search-type__title">Виртуальные тренажеры</p>
                                <p class="search-type__txt">Отработка манипуляций на тренажерах в виртуальной среде</p>
                            </div>
                        </a>
                    </div>
                    <div class="search-type__item">
                        <a href="vr-simulyatory.html">
                            <div class="search-type__img">
                                <img src="img/vr.jpg" alt="Симуляторы в виртуальной реальности">
                            </div>
                            <div class="search-type__desc">
                                <p class="search-type__title">Симуляторы в виртуальной реальности</p>
                                <p class="search-type__txt">Симуляторы в очках виртуальной реальности</p>
                            </div>
                        </a>
                    </div>
                    <div class="search-type__item">
                        <a href="manekeny-imitatory.html">
                            <div class="search-type__img">
                                <img src="img/manekins.jpg" alt="Манекены-имитаторы">
                            </div>
                            <div class="search-type__desc">
                                <p class="search-type__title">Манекены-имитаторы</p>
                                <p class="search-type__txt">Медицинские манекены взрослых пациентов, рожениц и детей</p>
                            </div>
                        </a>
                    </div>
                    <div class="search-type__item">
                        <a href="trenazhyory.html">
                            <div class="search-type__img">
                                <img src="img/aparatus.jpg" alt="Тренажёры">
                            </div>
                            <div class="search-type__desc">
                                <p class="search-type__title">Тренажёры</p>
                                <p class="search-type__txt">Устройства симуляционного тренинга манипуляций</p>
                            </div>
                        </a>
                    </div>
                    <div class="search-type__item">
                        <a href="fantomy-simulyatory.html">
                            <div class="search-type__img">
                                <img src="img/fantomy-glavnoe-1.jpg" alt="Фантомы">
                            </div>
                            <div class="search-type__desc">
                                <p class="search-type__title">Фантомы</p>
                                <p class="search-type__txt">Фантомы органов и тканей</p>
                            </div>
                        </a>
                    </div>
                    <div class="search-type__item">
                        <a href="modeli-organov-i-tkanej.html">
                            <div class="search-type__img">
                                <img src="img/organs.jpg" alt="Модели органов и тканей">
                            </div>
                            <div class="search-type__desc">
                                <p class="search-type__title">Модели органов и тканей</p>
                                <p class="search-type__txt">Анатомические модели органов и тканей</p>
                            </div>
                        </a>
                    </div>
                    <div class="search-type__item">
                        <a href="imitatory-medicinskoj-tehniki.html">
                            <div class="search-type__img">
                                <img src="img/ac112890p-1.jpg" alt="Имитаторы медицинской техники">
                            </div>
                            <div class="search-type__desc">
                                <p class="search-type__title">Имитаторы медицинской техники</p>
                                <p class="search-type__txt">Устройства, имитирующие реальное медицинское оборудование</p>
                            </div>
                        </a>
                    </div>
                    <div class="search-type__item">
                        <a href="sistemy-menedzhmenta.html">
                            <div class="search-type__img">
                                <img src="img/management-main-5.jpg" alt="Системы менеджмента">
                            </div>
                            <div class="search-type__desc">
                                <p class="search-type__title">Системы менеджмента</p>
                                <p class="search-type__txt">Управление учебным центром и учебным процессом</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <!-- END SEARCH-TYPE -->
            <div class="search__row">
                <!-- BEGIN SEARCH-SPECIALTY -->
                <div class="search-specialty" id="spec">
                    <div class="search-specialty__header">
                        <div>
                            <svg>
                                <use xlink:href="img/sprite.svg#nursing"></use>
                            </svg>
                            <span>По специальности</span>
                        </div>
                    </div>
                    <div class="search-specialty__list">
                        <div class="search-specialty__col">
                            <ul>

                                <li class="search-specialty__item">
                                    <a href="angiografiya.html">
                                        <svg>
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                href="img/sprite3.svg#angiography" width="20"></use>
                                        </svg>
                                        <div><span>Ангиография</span></div>
                                    </a>
                                </li>
                                <li class="search-specialty__item">
                                    <a href="anesteziologiya-i-reanimaciya.html">
                                        <svg>
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                href="img/sprite3.svg#anaesthesiology" width="20"></use>
                                        </svg>
                                        <div><span>Анестезиология-реаниматология</span></div>
                                    </a>
                                </li>
                                <li class="search-specialty__item">
                                    <a href="akusherstvo-i-ginekologiya.html">
                                        <svg>
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                href="img/sprite3.svg#obstetrics" width="13"></use>
                                        </svg>
                                        <div><span>Акушерство и гинекология</span></div>
                                    </a>
                                </li>
                                <li class="search-specialty__item">
                                    <a href="vnutrennie-bolezni.html">
                                        <svg>
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                href="img/sprite3.svg#cardiology" width="24"></use>
                                        </svg>
                                        <div><span>Терапия, кардиология</span></div>
                                    </a>
                                </li>
                                <li class="search-specialty__item">
                                    <a href="glaznye-bolezni.html">
                                        <svg>
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                href="img/sprite3.svg#eye-diseases" width="20"></use>
                                        </svg>
                                        <div><span>Офтальмология</span></div>
                                    </a>
                                </li>
                                <li class="search-specialty__item">
                                    <a href="nejrohirurgiya.html">
                                        <svg>
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                href="img/sprite3.svg#neurosurgery" width="21"></use>
                                        </svg>
                                        <div><span>Нейрохирургия</span></div>
                                    </a>
                                </li>
                                <li class="search-specialty__item">
                                    <a href="otorinolaringologiya-lor.html">
                                        <svg>
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                href="img/sprite3.svg#otorhinolaryngology" width="14"></use>
                                        </svg>
                                        <div><span>Оториноларингология (ЛОР)</span></div>
                                    </a>
                                </li>
                                <li class="search-specialty__item">
                                    <a href="pediatriya-i-neonatologiya.html">
                                        <svg>
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                href="img/sprite3.svg#pediatrics" width="20"></use>
                                        </svg>
                                        <div><span>Педиатрия и неонатология</span></div>
                                    </a>
                                </li>
                                <li class="search-specialty__item">
                                    <a href="radiologiya-uzi-rentgen.html">
                                        <svg>
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" href="img/sprite3.svg#radiology"
                                                width="22"></use>
                                        </svg>
                                        <div><span>Радиология (УЗИ, рентген)</span></div>
                                    </a>
                                </li>
                                <li class="search-specialty__item">
                                    <a href="sestrinskoe-delo.html">
                                        <svg>
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" href="img/sprite3.svg#nursing"
                                                width="20"></use>
                                        </svg>
                                        <div><span>Сестринское дело</span></div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="search-specialty__col">
                            <ul>

                                <li class="search-specialty__item">
                                    <a href="skoraya-pomoshh-voennaya-medicina-mchs.html">
                                        <svg>
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" href="img/sprite3.svg#emergency"
                                                width="19"></use>
                                        </svg>
                                        <div><span>Скорая помощь, военная медицина, МЧС</span></div>
                                    </a>
                                </li>
                                <li class="search-specialty__item">
                                    <a href="stomatologiya.html">
                                        <svg>
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" href="img/sprite3.svg#dentistry"
                                                width="16"></use>
                                        </svg>
                                        <div><span>Стоматология</span></div>
                                    </a>
                                </li>
                                <li class="search-specialty__item">
                                    <a href="travmatologiya-i-ortopediya.html">
                                        <svg>
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" href="img/sprite3.svg#trauma"
                                                width="20"></use>
                                        </svg>
                                        <div><span>Травматология и ортопедия</span></div>
                                    </a>
                                </li>
                                <li class="search-specialty__item">
                                    <a href="urologiya-i-endourologiya.html">
                                        <svg>
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                href="img/sprite3.svg#internal-illnesses" width="24"></use>
                                        </svg>
                                        <div><span>Урология и эндоурология</span></div>
                                    </a>
                                </li>
                                <li class="search-specialty__item">
                                    <a href="hirurgiya-i-laparoskopiya.html">
                                        <svg>
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink" href="img/sprite3.svg#surgery"
                                                width="23"></use>
                                        </svg>
                                        <div><span>Хирургия и лапароскопия</span></div>
                                    </a>
                                </li>
                                <li class="search-specialty__item">
                                    <a href="endoskopiya.html">
                                        <svg>
                                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xlink:href="img/sprite.svg#endoscopy" width="23"></use>
                                        </svg>
                                        <div><span>Эндоскопия</span></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- END SEARCH-SPECIALTY -->
                <!-- BEGIN SEARCH-SKILL -->
                <div class="search-skill" id="skill">
                    <div class="search-skill__header">
                        <div>
                            <svg>
                                <use xlink:href="img/sprite.svg#injections"></use>
                            </svg>
                            <span>По навыку</span>
                        </div>
                    </div>
                    <div class="search-skill__list">
                        <ul>

                            <li class="search-specialty__item">
                                <a href="diagnostika.html">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" href="img/sprite3.svg#diagnostics"
                                            width="20"></use>
                                    </svg>
                                    <div><span>Объективные исследования</span></div>
                                </a>
                            </li>
                            <li class="search-specialty__item">
                                <a href="intubaciya-ventilyaciya.html">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" href="img/sprite3.svg#intubation"
                                            width="24"></use>
                                    </svg>
                                    <div><span>Интубация, вентиляция</span></div>
                                </a>
                            </li>
                            <li class="search-specialty__item">
                                <a href="inekcii-i-punkcii.html">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" href="img/sprite3.svg#injections"
                                            width="20"></use>
                                    </svg>
                                    <div><span>Инъекции и пункции</span></div>
                                </a>
                            </li>
                            <li class="search-specialty__item">
                                <a href="issledovanie-organov.html">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                            href="img/sprite3.svg#organ-research" width="22"></use>
                                    </svg>
                                    <div><span>Инструментальная диагностика</span></div>
                                </a>
                            </li>
                            <li class="search-specialty__item">
                                <a href="klinicheskoe-myshlenie.html">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                            href="img/sprite3.svg#clinical-thinking-new" width="23"></use>
                                    </svg>
                                    <div><span>Клиническое мышление</span></div>
                                </a>
                            </li>
                            <li class="search-specialty__item">
                                <a href="rody.html">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" href="img/sprite3.svg#parturition"
                                            width="24"></use>
                                    </svg>
                                    <div><span>Роды</span></div>
                                </a>
                            </li>
                            <li class="search-specialty__item">
                                <a href="spasenie-zhizni-spr.html">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                            href="img/sprite3.svg#saving-lives-new" width="25"></use>
                                    </svg>
                                    <div><span>Спасение жизни, СЛР</span></div>
                                </a>
                            </li>
                            <li class="search-specialty__item">
                                <a href="uhod-za-bolnymi.html">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" href="img/sprite3.svg#nursing-2"
                                            width="25"></use>
                                    </svg>
                                    <div><span>Уход за больными</span></div>
                                </a>
                            </li>
                            <li class="search-specialty__item">
                                <a href="uhod-za-detmi.html">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                            href="img/sprite3.svg#care-for-children" width="14"></use>
                                    </svg>
                                    <div><span>Уход за детьми</span></div>
                                </a>
                            </li>
                            <li class="search-specialty__item">
                                <a href="hirurgicheskij-shov.html">
                                    <svg>
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                            href="img/sprite3.svg#surgical-suture" width="16"></use>
                                    </svg>
                                    <div><span>Хирургический шов</span></div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END SEARCH-SKILL -->
            </div>
        </div>
    </div>
    <!-- END SEARCH -->




    <section class="slider-products">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h2 class="text-white">Наши товары</h2>
                    <div class="products-slider wow fadeInUp" data-wow-duration="1s">
                        @foreach ($order as $item)

                            <div class="item">
                                <div class="item-inner" style="padding-top: 0;">
                                    <a href="javascript:;" data-fancybox data-type="ajax"
                                        data-src="{{ route('detail', ['slug' => $item->slug]) }}">
                                        <picture>
                                            <source srcset="{{ $item->getImagePrev() }}" type="image/webp" />
                                            <img src="{{ $item->getImagePrev() }}" alt="" />
                                        </picture>
                                    </a>
                                    <a href="javascript:;" data-fancybox data-type="ajax"
                                        data-src="{{ route('detail', ['slug' => $item->slug]) }}"
                                        style="text-decoration: none;">
                                        <h4>{{ $item->title }}</h4>
                                    </a>
                                    <small>Легкая, удобная, модная</small>
                                </div>
                            </div>

                        @endforeach

                    </div>
                    <!-- /.products-slider -->
                </div>
            </div>
        </div>
    </section>


    <div class="page_content_wrap" style="display: none;">

        <div class="content">
            <article
                class="itemscope post_item post_item_single post_featured_default post_format_standard post-1150 page type-page status-publish hentry"
                itemscope itemtype="http://schema.org/Article">
                <section class="post_content" itemprop="articleBody">
                    <div class="sc_reviews alignright">
                        <!-- #TRX_REVIEWS_PLACEHOLDER# -->
                    </div>



                    <!-- о нас-->
                    @foreach ($about as $item)
                        <div class="vc_row wpb_row vc_row-flu id">
                            <div class="vc_col-sm-12 wpb_column vc_column_container custom_1433323259761">
                                <div class="wpb_wrapper">
                                    <a id="wellcome" class="sc_anchor" title="About" data-description="WELCOME TO OUR SITE"
                                        data-icon="icon-iconmonstr-clipboard-3-icon" data-url="" data-separator="no"></a>

                                    <div class="sc_section bg_tint_none" data-animation="animated fadeInUp normal"
                                        style="margin-top:7em !important; ">
                                        <div class="sc_content content_wrap">
                                            <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_2">
                                                <div class="column-1_2 sc_column_item sc_column_item_1 odd first">
                                                    <div class="sc_section small_slider bg_tint_none aligncenter"
                                                        style="width:100%; width:100%;">
                                                        <div class="wpb_revslider_element">
                                                            <div
                                                                class="sc_slider sc_slider_swiper swiper-slider-container sc_slider_height_fixed sc_slider_controls sc_slider_pagination">
                                                                <div class="slides swiper-wrapper">
                                                                    <div data-style="width:373px;height:287px;">
                                                                        <img src="{{ $item->getImage() }}" alt=""
                                                                            height="280">
                                                                    </div>

                                                                </div>
                                                                <div class="sc_slider_pagination_wrap"></div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-1_2 sc_column_item sc_column_item_2 even">

                                                    <h2 class="sc_title sc_title_regular no_bottom_border">
                                                        {{ $item->title }}</h2>

                                                    <div class="wpb_text_column wpb_content_element  custom_1434015689803">
                                                        <div class="wpb_wrapper">
                                                            <p>{!! $item->anonce !!}</p>

                                                        </div>
                                                    </div>

                                                    <a href="{{ route('about') }}"
                                                        class="sc_button sc_button_square sc_button_style_button-2 sc_button_bg_custom sc_button_size_medium  sc_button_iconed inherit">
                                                        <span class="button-up">подробно</span>
                                                        <span>подробно</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- о нас -->
                    @endforeach



                    <div class="vc_row wpb_row vc_row-fluid" style="margin-bottom: 5.5em !important;">
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
                            <div class="wpb_wrapper">
                                <div class="sc_parallax bg_tint_light" style="min-height: 350px;margin-top:5em;height:25em;"
                                    data-parallax-speed="0.7" data-parallax-x-pos="50%" data-parallax-y-pos="50%"
                                    data-animation="animated fadeInUp normal">
                                    <div class="sc_parallax_content"
                                        style="background-image:url(/public/fazka/images/bg.jpg); background-position:50% 50%;">
                                        <div class="wpb_text_column wpb_content_element  custom_1433323921738">
                                            <div class="wpb_wrapper">
                                                <p style="text-align: center;">
                                                    <span
                                                        style="color: #ffffff; font-size: 5em; font-weight: 200;line-height: 1em;">
                                                        <span style="font-weight: bold; color: #f74f08;">&#8221; </span>
                                                        Фаз
                                                        <span style="font-weight: bold;">ка
                                                            <span style="color: #f74f08;">&#8220;</span>
                                                        </span>
                                                    </span>
                                                </p>

                                            </div>
                                        </div>
                                        <div class="wpb_text_column wpb_content_element custom_1434015753634">
                                            <div class="wpb_wrapper">
                                                <p style="text-align: center;">
                                                    <span style="font-size: 1.2857em; color: #ffffff; font-weight: 300;">


                                                        Совместное Российское-Узбекское <br>
                                                        <span
                                                            style="font-weight: bold; color: #f74f08;">предприятие,производит
                                                            Стабилизаторы </span><br>
                                                        переменного тока марки "Фаз.ка"
                                                    </span>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="vc_col-sm-12 wpb_column vc_column_container">
                            <div class="wpb_wrapper">
                                <div class="sc_section bg_tint_none" data-animation="animated fadeInUp normal"
                                    style="background-color:#f7f7f9; ">
                                    <div class="sc_section_overlay" style="">
                                        <div class="sc_section_content">
                                            <h2 class="sc_title sc_title_regular sc_align_center bottom_border"
                                                style="text-align:center;">Продукция</h2>

                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">

                                                </div>
                                            </div>
                                            <div class="sc_content content_wrap"
                                                style="margin-top:6em !important;margin-bottom:5em !important;">



                                                <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_4">


                                                    @foreach ($order as $item)
                                                        <div class="column-1_4 sc_column_item sc_column_item_1 odd first"
                                                            style="text-align:none;">


                                                            <div class="post_featured">
                                                                <div class="post_thumb"
                                                                    data-image="/public/fazka/images/istock_000014378598medium.jpg"
                                                                    data-title="We Need a Manufacturing Renaissance">
                                                                    <a class="hover_icon hover_icon_link" href="#" title="

                                ">
                                                                        <img class="wp-post-image" width="400" height="225"
                                                                            alt="We Need a Manufacturing Renaissance"
                                                                            src="{{ $item->getImagePrev() }}">
                                                                    </a>
                                                                </div>
                                                            </div>





                                                            <h4 class="sc_title sc_title_regular sc_align_center no_bottom_border"
                                                                style="margin-top:1em;text-align:center;">
                                                                {{ $item->title }}</h4>

                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <p style="text-align: center;">{!! str_limit($item->anonce, 150) !!}
                                                                        <br />
                                                                        <a href="{{ route('detail', ['slug' => $item->slug]) }}"
                                                                            class="sc_button sc_button_square sc_button_style_style-8 sc_button_bg_custom sc_button_size_medium  sc_button_iconed inherit"
                                                                            style="margin-top:1em;">
                                                                            <span class="button-up">подробно</span>
                                                                            <span>подробно</span>
                                                                        </a>
                                                                    </p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (count($gallery) > 0)
                        <!-- Галерея-->
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="vc_col-sm-12 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <a name="ourprojects" id="ourprojects" class="sc_anchor" title="Projects"
                                        data-description="Our projects" data-icon="icon-picture-1" data-url=""
                                        data-separator="no"></a>

                                    <div class="sc_section bg_tint_none" data-animation="animated fadeInUp normal"
                                        style="margin-top:6em !important;margin-bottom:5.5em !important;">
                                        <div class="sc_content content_wrap">
                                            <h2 class="sc_title sc_title_regular sc_align_center bottom_border"
                                                style="text-align:center;">Галерея</h2>


                                            <div class="sc_content content_wrap"
                                                style="margin-top:6em !important;margin-bottom:5em !important;">



                                                <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_4">

                                                    @foreach ($gallery as $item)
                                                        <div class="column-1_4 sc_column_item sc_column_item_1 odd first"
                                                            style="text-align:none;">


                                                            <div class="post_featured">
                                                                <div class="post_thumb">
                                                                    <a class="hover_icon hover_icon_link"
                                                                        href="{{ $item->getImageBig() }}"
                                                                        data-fancybox="gallery" />
                                                                    <img class="wp-post-image" width="400" height="225"
                                                                        src="{{ $item->getImage() }}">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    @endforeach

                                                </div>



                                            </div>



                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <p style="text-align: center;">
                                                        <a href="{{ route('gallery') }}"
                                                            class="sc_button sc_button_square sc_button_style_button-1 sc_button_bg_custom sc_button_size_medium  sc_button_iconed inherit"
                                                            style="margin-top:4em;">
                                                            <span class="button-up">в галерею</span>
                                                            <span>в галерею</span>
                                                        </a>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Галерея-->
                    @endif





                    @if (count($video) > 0)
                        <!-- Галерея-->
                        <div class="vc_row wpb_row vc_row-fluid" style="background-color:#f7f7f9; ">
                            <div class="vc_col-sm-12 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <a name="ourprojects" id="ourprojects" class="sc_anchor" title="Projects"
                                        data-description="Our projects" data-icon="icon-picture-1" data-url=""
                                        data-separator="no"></a>

                                    <div class="sc_section bg_tint_none" data-animation="animated fadeInUp normal"
                                        style="margin-top:6em !important;margin-bottom:5.5em !important;">
                                        <div class="sc_content content_wrap">
                                            <h2 class="sc_title sc_title_regular sc_align_center bottom_border"
                                                style="text-align:center;">Видеоблог</h2>


                                            <div class="sc_content content_wrap"
                                                style="margin-top:6em !important;margin-bottom:5em !important;">



                                                <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_4">

                                                    @foreach ($video as $item)
                                                        <div class="column-1_4 sc_column_item sc_column_item_1 odd first"
                                                            style="text-align:none;">


                                                            <div class="post_featured">
                                                                <div class="post_thumb">
                                                                    <a class="hover_icon hover_icon_link"
                                                                        href="{{ $item->showlink }}" data-fancybox />


                                                                    {!! $item->link !!}


                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    @endforeach

                                                </div>



                                            </div>



                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <p style="text-align: center;">
                                                        <a href="{{ route('video') }}"
                                                            class="sc_button sc_button_square sc_button_style_button-1 sc_button_bg_custom sc_button_size_medium  sc_button_iconed inherit"
                                                            style="margin-top:4em;">
                                                            <span class="button-up">в видеоблог</span>
                                                            <span>в видеоблог</span>
                                                        </a>
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Галерея-->
                    @endif


                    @if (count($news) > 0)
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="vc_col-sm-12 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <a id="news" class="sc_anchor" title="Blog" data-description="Industry News"
                                        data-icon="icon-docs" data-url="" data-separator="no"></a>

                                    <div class="sc_section bg_tint_none" data-animation="animated fadeInUp normal"
                                        style="margin-top:6em !important;margin-bottom:4.5em !important; ">
                                        <div class="sc_content content_wrap">
                                            <h2 class="sc_title sc_title_regular sc_align_center bottom_border"
                                                style="text-align:center;">Новости</h2>

                                            <div id="sc_blogger_1808768584"
                                                class="sc_blogger layout_classic_4 template_masonry sc_blogger_horizontal">
                                                <div class="isotope_wrap" data-columns="4">

                                                    @foreach ($news as $item)
                                                        <div
                                                            class="isotope_item isotope_item_classic isotope_item_classic_4 isotope_column_4">
                                                            <div
                                                                class="post_item post_item_classic post_item_classic_4 post_format_standard odd">

                                                                <div class="post_featured">
                                                                    <div class="post_thumb"
                                                                        data-image="images/istock_000014378598medium.jpg"
                                                                        data-title="We Need a Manufacturing Renaissance">
                                                                        <a class="hover_icon hover_icon_link" href="#">
                                                                            <img class="wp-post-image" width="250"
                                                                                height="141"
                                                                                alt="We Need a Manufacturing Renaissance"
                                                                                src="{{ $item->getImage() }}"></a>
                                                                    </div>
                                                                </div>

                                                                <div class="post_content isotope_item_content">

                                                                    <h4 class="post_title">
                                                                        <a
                                                                            href="{{ route('newsdetail', ['slug' => $item->slug]) }}">{{ $item->title }}</a>
                                                                    </h4>



                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                        <div class="wpb_wrapper">
                                                                            <p style="text-align: center;">

                                                                                {!! str_limit($item->anonce, 150) !!}

                                                                            </p>


                                                                            <br>
                                                                            <a href="{{ route('newsdetail', ['slug' => $item->slug]) }}"
                                                                                class="sc_button sc_button_square sc_button_style_button-2 sc_button_bg_link sc_button_size_medium add_link"
                                                                                style="margin-right:15px;">
                                                                                <span class="button-up">подробно</span>
                                                                                <span>подробно</span>
                                                                            </a>

                                                                        </div>
                                                                    </div>



                                                                </div>
                                                                <!-- /.post_content -->
                                                            </div>
                                                            <!-- /.post_item -->
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
                            <div class="wpb_wrapper">
                                <a id="contacts" class="sc_anchor" title="Contacts" data-description="Contacts"
                                    data-icon="icon-mail" data-url="" data-separator="no"></a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- </section> class="post_content" itemprop="articleBody"> -->
            </article>
            <!-- </article> class="itemscope post_item post_item_single post_featured_default post_format_standard post-1150 page type-page status-publish hentry" itemscope itemtype="http://schema.org/Article"> -->
            <section class="related_wrap related_wrap_empty"></section>


        </div>
        <!-- </div> class="content"> -->
    </div>


@endsection
