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
                    @foreach ($news as $item)
                        <a class="news__item" href="{{ route('newsdetail', ['slug' => $item->slug]) }}">
                            <div class="news__img">
                                <img src="{{ $item->getImage() }}" alt="РеспиСим - новая версия программного обеспечения">
                            </div>
                            <div class="news__desc">
                                <h3>{{ $item->title }}</h3>
                                <p>{!! str_limit($item->anonce, 300) !!}</p>
                                <time datetime="">{{ $item->created_at->format('M d Y') }}</time>
                            </div>
                        </a>
                    @endforeach
                </div>
                <a class="m-news__all" href="{{ route('news') }}">Все новости</a>
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
                    @foreach ($cats as $cat)
                        <div class="search-type__item">
                            <a href="{{ route('category', ['slug' => $cat->slug]) }}">
                                <div class="search-type__img">
                                    <img src="{{ $cat->getImage() }}">
                                </div>
                                <div class="search-type__desc">
                                    <div class="search-type__title">
                                        {{ $cat->title }}
                                    </div>
                                    <div class="search-type__txt">
                                        {{ $cat->description }}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- END SEARCH-TYPE -->
   
        </div>
    </div>
    <!-- END SEARCH -->

    <div class="about">
        <div class="container">
            <div class="about__inner">
                <h1 class="about__title">Симуляционные центры «под ключ»</h1>
                <div class="about__txt">
                    <p>Фирма U-robotics первой в Узбекистане начала обеспечивать медицинские образовательные учреждения
                        комплексными, системными решениями медицинского симуляционного обучения. Именно в нашей фирме
                        родилось понятие "Симуляционный центр&nbsp;"под
                        ключ" - от дизайна помещений и поставки продукции, до монтажа оборудования и обучения персонала. На
                        нашем сайте Вы найдете полный спектр изделий, призванных помочь овладеть клиническим мышлением,
                        освоить разнообразные практические
                        медицинские навыки и умения, отработать выполнение медицинских манипуляций, процедур и исследований,
                        оказать первой медицинской помощи и провести расширенные реанимационные мероприятия.&nbsp;
                        Оборудование и изделия предназначены
                        для всех уровней обучаемых: врачей-специалистов, ординаторов, студентов медицинских ВУЗов и
                        колледжей,&nbsp;среднего и младшего медицинского персонала. Кроме того, эти изделия будут полезны
                        всем, кто по долгу службы может столкнуться
                        с оказанием экстренной медицинской помощи - спасателям МЧС, сотрудникам полиции, военнослужащим,
                        нефтянникам.</p>
                </div>
                <a class="about__link" href="{{ route('about') }}">
                    <span>Узнать больше о нас</span>
                    <svg>
                        <use xlink:href="img/sprite.svg#arrow_white"></use>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <!-- END ABOUT -->
    <!-- BEGIN PARTNERS -->
    <div class="partners">
        <div class="container">
            <p class="partners__title">Методики для нашей продукции разрабатывали эти организации:</p>
            <div class="partners__row">
                <div class="partners__item">
                    <div class="partners__img">
                        <img src="img/rosomed-text.jpg"
                            alt="Узбекское общество симуляционного обучения в медицине (РОСОМЕД)">
                    </div>
                    <div class="partners__desc">
                        <span>Узбекское общество симуляционного обучения в медицине (РОСОМЕД)</span>
                    </div>
                </div>
                <div class="partners__item">
                    <div class="partners__img">
                        <img src="img/roh-big.jpg" alt="Узбекское общество хирургов (РОХ)">
                    </div>
                    <div class="partners__desc">
                        <span>Узбекское общество хирургов (РОХ)</span>
                    </div>
                </div>
                <div class="partners__item">
                    <div class="partners__img">
                        <img src="img/roeh-color.jpg" alt="Узбекское общество эндоскопических хирургов (РОЭХ)">
                    </div>
                    <div class="partners__desc">
                        <span>Узбекское общество эндоскопических хирургов (РОЭХ)</span>
                    </div>
                </div>
                <div class="partners__item">
                    <div class="partners__img">
                        <img src="img/AAMS-logo.jpg"
                            alt="Международная ассоциация воздушной медицинской помощи (санавиации — AAMS)">
                    </div>
                    <div class="partners__desc">
                        <span>Международная ассоциация воздушной медицинской помощи (санавиации — AAMS)</span>
                    </div>
                </div>
                <div class="partners__item">
                    <div class="partners__img">
                        <img src="img/AHA-logo.jpg" alt="Американская кардиологическая ассоциация (AHA)">
                    </div>
                    <div class="partners__desc">
                        <span>Американская кардиологическая ассоциация (AHA)</span>
                    </div>
                </div>
                <div class="partners__item">
                    <div class="partners__img">
                        <img src="img/NASA-logo.jpg"
                            alt="Национальное управление по аэронавтике и исследованию космического пространства (NASA)">
                    </div>
                    <div class="partners__desc">
                        <span>Национальное управление по аэронавтике и исследованию космического пространства (NASA)</span>
                    </div>
                </div>
                <div class="partners__item">
                    <div class="partners__img">
                        <img src="img/NSC-logo.jpg" alt="Национальный совет по безопасности (NSC)">
                    </div>
                    <div class="partners__desc">
                        <span>Национальный совет по безопасности (NSC)</span>
                    </div>
                </div>
                <div class="partners__item">
                    <div class="partners__img">
                        <img src="img/ESSKA-logo.jpg"
                            alt="Европейское общество спортивной травматологии, хирургии колена и артроскопии (ESSKA)">
                    </div>
                    <div class="partners__desc">
                        <span>Европейское общество спортивной травматологии, хирургии колена и артроскопии (ESSKA)</span>
                    </div>
                </div>
                <div class="partners__item">
                    <div class="partners__img">
                        <img src="img/ASGE-logo.jpg" alt="Американское общество гастро-интестинальной эндоскопии (ASGE)">
                    </div>
                    <div class="partners__desc">
                        <span>Американское общество гастро-интестинальной эндоскопии (ASGE)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
