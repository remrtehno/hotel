@extends("main.main")



@section('content')

<br>
<br>
<div class="container">
    <div class="page-title">
        <h1>Продукция</h1>
    </div>

    <div class="content">
        <aside class="sidebar">
            <!-- BEGIN FILTER -->
            <form class="filter" action="">
                <!-- Sort Fields -->
                <input type="hidden" name="sortby" value="menuindex">
                <input type="hidden" name="sortdir" value="ASC">
                <!-- Sort End -->


                <div class="filter__section">
                    <p class="filter__title">Категории</p>

                    <div class="form__checkbox filter__hidden" style="display: none;">
                        <input type="checkbox" name="spec[]" data-filter-spec="33" value="33" id="check33">
                        <label for="check33">
          <span>Радиология (УЗИ, рентген)</span>
          <svg>
            <use xlink:href="img/sprite.svg#check"></use>
          </svg>
        </label>
                    </div>
       
                    </div>

                </div>

            </form>
            <!-- END FILTER -->
        </aside>
        <!-- BEGIN PRODUCTS -->
        <div class="products">
            <a class="products__item" href="roboty-simulyatory/cezar.html" data-type="10" data-skill="16,53,19,21,45,46" data-spec="26,35,63,64,65,66">
                <div class="products__img">
                    <img src="img/cezar-170x123-137.jpeg" alt="Цезарь">
                </div>
                <p class="products__name">Цезарь</p>
                <p class="products__desc">Самый прочный робот-симулятор в мире</p>
                <p class="products__code">Код товара: CH.CSR-100, CH.CSR-101</p>
            </a>
            <a class="products__item" href="roboty-simulyatory/robot-simulyator-hps.html" data-type="10" data-skill="16,53,19" data-spec="26,657">
                <div class="products__img">
                    <img src="img/120-hps-170x123-aa4.jpeg" alt="ХПС">
                </div>
                <p class="products__name">ХПС</p>
                <p class="products__desc">Стационарная модель Hi-End класса</p>
                <p class="products__code">Код товара: CH.HPS-010, CH.HPS-020</p>
            </a>
            <a class="products__item" href="roboty-simulyatory/apollon.html" data-type="10" data-skill="16,53,17,60,61,19,21,45,46,22,55" data-spec="26,34,72,35,63,64,65,66">
                <div class="products__img">
                    <img src="img/apollon2-170x123-aa4.jpeg" alt="Аполлон">
                </div>
                <p class="products__name">Аполлон</p>
                <p class="products__desc">Отработка навыков оказания неотложной помощи в команде</p>
                <p class="products__code">Код товара: CH.APP-200</p>
            </a>
            <a class="products__item" href="roboty-simulyatory/ares.html" data-type="10" data-skill="16,53,17,19,21,45,46" data-spec="26,35,63,64,65,66">
                <div class="products__img">
                    <img src="img/ares-suncoast-9895-170x123-aa4.jpeg" alt="Арес">
                </div>
                <p class="products__name">Арес</p>
                <p class="products__desc">Оказание экстренной помощи</p>
                <p class="products__code">Код товара: CH.ARES-100, CH.ARES-200, CH.ARES-300</p>
            </a>
            <a class="products__item" href="roboty-simulyatory/afina.html" data-type="10" data-skill="16,53,17,60,61,19,21,45,46" data-spec="26,35,63,64">
                <div class="products__img">
                    <img src="img/afina2-170x123-aa4.jpeg" alt="Афина">
                </div>
                <p class="products__name">Афина</p>
                <p class="products__desc">Полностью повторяет анатомию и физиологию пациента женского пола</p>
                <p class="products__code">Код товара: CH.ATH-200</p>
            </a>
            <a class="products__item" href="roboty-simulyatory/lyusina-fidelis.html" data-type="10" data-skill="16,53,17,60,61,19,20,45,46" data-spec="27">
                <div class="products__img">
                    <img src="img/fidelis2-170x123-aa4.jpeg" alt="Люсина">
                </div>
                <p class="products__name">Люсина</p>
                <p class="products__desc">Обучение приемам родовспоможения, включая предродовый и послеродовый периоды</p>
                <p class="products__code">Код товара: CH.MFS-100</p>
            </a>
            <a class="products__item" href="roboty-simulyatory/dzhuno.html" data-type="10" data-skill="22,55,56" data-spec="34,72,73,35,64">
                <div class="products__img">
                    <img src="img/caejuno-naso_trach_iv_overhead_r2-170x123-b36.jpeg" alt="Джуно">
                </div>
                <p class="products__name">Джуно</p>
                <p class="products__desc">Симулятор пациента для отработки навыка ухода за больными</p>
                <p class="products__code">Код товара: CH.JUN-100</p>
            </a>
            <a class="products__item" href="roboty-simulyatory/robot-maneken-rebenka.html" data-type="10" data-skill="16,54,19,47,23,59" data-spec="26,655,32,598,35,63,64">
                <div class="products__img">
                    <img src="img/pediasim-170x123-aa4.jpeg" alt="ПедиаСИМ">
                </div>
                <p class="products__name">ПедиаСИМ</p>
                <p class="products__desc">Педиатрический робот-симулятор</p>
                <p class="products__code">Код товара: CH.PECS-300</p>
            </a>
            <a class="products__item" href="roboty-simulyatory/luna.html" data-type="10" data-skill="16,54,17,62,19,47,23,58" data-spec="26,656,32,87,88,598">
                <div class="products__img">
                    <img src="img/luna-170x123-872.png" alt="ЛУНА">
                </div>
                <p class="products__name">ЛУНА</p>
                <p class="products__desc">Беспроводной манекен новорожденного ребенка для отработки оказания помощи в неонатологии
                </p>
                <p class="products__code">Код товара: CH.LUN-300</p>
            </a>
            <a class="products__item" href="roboty-simulyatory/kroha-pavlik.html" data-type="10" data-skill="16,54,17,60,19,58" data-spec="26,656,32,87,598,654">
                <div class="products__img">
                    <img src="img/sim_draeger-1-170x123-aa4.jpeg" alt="Кроха Павлик">
                </div>
                <p class="products__name">Кроха Павлик</p>
                <p class="products__desc">Самый маленький робот-симулятор в мире!</p>
                <p class="products__code">Код товара: SC.Paul</p>
            </a>
            <a class="products__item" href="roboty-simulyatory/virtubot.html" data-type="10" data-skill="15,19" data-spec="28,35,63,64,65,66">
                <div class="products__img">
                    <img src="img/dsc_0008-170x123-014.jpeg" alt="ВиртуБОТ">
                </div>
                <p class="products__name">ВиртуБОТ</p>
                <p class="products__desc">Робот для отработки навыков общения</p>
                <p class="products__code">Код товара: MK.VB</p>
            </a>
        </div>
        <!-- END PRODUCTS -->
    </div>




    <div class="page_top_wrap page_top_title page_top_breadcrumbs" style="margin-top: 130px">
        <div class="content_wrap">
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="/" title="Home">Главная</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">продукция</span>
            </div>
            <h1 class="page_title">продукция</h1>
        </div>
    </div>

    <div class="page_content_wrap">

        <div class="content_wrap">
            <div class="content">
                <article class="itemscope post_item post_item_single post_featured_default post_format_standard post-584 page type-page status-publish hentry" itemscope="" itemtype="http://schema.org/Article">
                    <section class="post_content" itemprop="articleBody">
                        <div class="sc_reviews alignright"><!-- #TRX_REVIEWS_PLACEHOLDER# --></div>
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="vc_col-sm-12 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <div class="sc_section bg_tint_none" style="margin-top:1em !important; ">
                                        <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_4 depart_col">
                                            <div class="column-1_4" style="text-align:none;margin-bottom: 20px" data-animation="animated fadeInUp normal">

                                               @foreach($cat as $item)

                                                <a href="{{ route('category',['slug'=>$item->slug]) }}" class="sc_button sc_button_square sc_button_style_style-7 sc_button_bg_custom sc_button_size_medium  sc_button_iconed inherit" style="margin-top:3px;">
                                                    <span class="button-up">{{ $item->title }}</span>
                                                    <span>{{ $item->title }}</span>
                                                </a>

                                                @endforeach
                                            </div>


                                            <div class="column-3_4 sc_column_item sc_column_item_2 even span_3 animated fadeInUp normal" style="text-align:none;" data-animation="animated fadeInUp normal">

                                                @foreach($products as $item)
                                                <section class="lefd">
                                                <figure class="sc_image  sc_image_shape_square" style="margin-bottom:2.8571em !important;">
                                                    <img src="{{ $item->getImage() }}" alt="">
                                                </figure>
                                                    <h3 class="sc_title sc_title_regular" ><a href="{{ route('detail',['slug'=>$item->slug]) }}">{{ $item->title }}</a></h3>

                                                <div class="wpb_text_column wpb_content_element  custom_1432116266774">
                                                    <div class="wpb_wrapper">
                                                        <p><p>{!! str_limit($item->anonce,350) !!}  </p></p>


                                                        <a href="{{ route('detail',['slug'=>$item->slug]) }}" class="sc_button sc_button_square sc_button_style_button-2 sc_button_bg_link sc_button_size_medium add_link" style="margin-right:15px; ">
                                                            <span class="button-up">подробно</span>
                                                            <span>подробно</span>
                                                        </a>
                                                    </div>
                                                </div>
                                          </section>
                                                @endforeach



                                            </div>


                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- </section> class="post_content" itemprop="articleBody"> -->
                </article>
                <!-- </article> class="itemscope post_item post_item_single post_featured_default post_format_standard post-584 page type-page status-publish hentry" itemscope itemtype="http://schema.org/Article"> -->
                <section class="related_wrap related_wrap_empty"></section>

            </div>
            <!-- </div> class="content"> -->
        </div>
        <!-- </div> class="content_wrap"> -->
    </div>


@endsection

