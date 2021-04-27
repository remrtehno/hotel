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
                    @endforeach
                  


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

    <div class="about">
        <div class="container">
            <div class="about__inner">
                <h1 class="about__title">Симуляционные центры «под ключ»</h1>
                <div class="about__txt">
                    <p>Фирма ВИРТУМЕД первой в России начала обеспечивать медицинские образовательные учреждения комплексными, системными решениями медицинского симуляционного обучения. Именно в нашей фирме родилось понятие "Симуляционный центр&nbsp;"под
                        ключ" - от дизайна помещений и поставки продукции, до монтажа оборудования и обучения персонала. На нашем сайте Вы найдете полный спектр изделий, призванных помочь овладеть клиническим мышлением, освоить разнообразные практические
                        медицинские навыки и умения, отработать выполнение медицинских манипуляций, процедур и исследований, оказать первой медицинской помощи и провести расширенные реанимационные мероприятия.&nbsp; Оборудование и изделия предназначены
                        для всех уровней обучаемых: врачей-специалистов, ординаторов, студентов медицинских ВУЗов и колледжей,&nbsp;среднего и младшего медицинского персонала. Кроме того, эти изделия будут полезны всем, кто по долгу службы может столкнуться
                        с оказанием экстренной медицинской помощи - спасателям МЧС, сотрудникам полиции, военнослужащим, нефтянникам.</p>
                </div>
                <a class="about__link" href="o-kompanii.html">
                    <span>Узнать больше о нас</span>
                    <svg><use xlink:href="img/sprite.svg#arrow_white"></use></svg>
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
                        <img src="img/rosomed-text.jpg" alt="Российское общество симуляционного обучения в медицине (РОСОМЕД)">
                    </div>
                    <div class="partners__desc">
                        <span>Российское общество симуляционного обучения в медицине (РОСОМЕД)</span>
                    </div>
                </div>
                <div class="partners__item">
                    <div class="partners__img">
                        <img src="img/roh-big.jpg" alt="Российское общество хирургов (РОХ)">
                    </div>
                    <div class="partners__desc">
                        <span>Российское общество хирургов (РОХ)</span>
                    </div>
                </div>
                <div class="partners__item">
                    <div class="partners__img">
                        <img src="img/roeh-color.jpg" alt="Российское общество эндоскопических хирургов (РОЭХ)">
                    </div>
                    <div class="partners__desc">
                        <span>Российское общество эндоскопических хирургов (РОЭХ)</span>
                    </div>
                </div>
                <div class="partners__item">
                    <div class="partners__img">
                        <img src="img/AAMS-logo.jpg" alt="Международная ассоциация воздушной медицинской помощи (санавиации — AAMS)">
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
                        <img src="img/NASA-logo.jpg" alt="Национальное управление по аэронавтике и исследованию космического пространства (NASA)">
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
                        <img src="img/ESSKA-logo.jpg" alt="Европейское общество спортивной травматологии, хирургии колена и артроскопии (ESSKA)">
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
