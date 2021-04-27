@extends("main.main")

@section('slider')
    @include("lib.slider")
@endsection

@section('userwrap')
    @include("lib.userwrap")
@endsection

@section('content')

<!-- BEGIN BANNER-->
<div class="banner slider">
    <div class="banner__item">
        <img src="img/1809aadd8b5554064cf10b16c7d9577a.jpg.f622b0db75b9c3beed1f3a3a4711507a.jpg" alt="Полный спектр оборудования для симуляционных центров">
        <div class="banner__caption">
            <div class="container">
                <p class="banner__txt">Полный спектр оборудования для симуляционных центров</p>
                <a href="produkciya.html" tabindex="0">
                    <span>Каталог продукции</span>
                    <svg><use xlink:href="img/sprite.svg#arrow_white"></use></svg>
                </a>
            </div>
        </div>
    </div>
    <div class="banner__item">
        <img src="img/slider-1340x305-ac72.jpg" alt="Полный спектр оборудования для симуляционных центров">
        <div class="banner__caption">
            <div class="container">
                <p class="banner__txt">Полный спектр оборудования для симуляционных центров</p>
                <a href="produkciya.html" tabindex="0">
                    <span>Каталог продукции</span>
                    <svg><use xlink:href="img/sprite.svg#arrow_white"></use></svg>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- END BANNER -->


<section class="slider-products">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <h2 class="text-white">Наши товары</h2>
              <div class="products-slider wow fadeInUp" data-wow-duration="1s">
                               @foreach($order as $item)
                                                    
                                                    <div class="item">
                  <div class="item-inner" style="padding-top: 0;">
                    <a href="javascript:;" data-fancybox data-type="ajax" data-src="{{ route('detail',['slug'=>$item->slug]) }}">
                      <picture>
                        <source
                          srcset="{{ $item->getImagePrev() }}"
                          type="image/webp"
                        />
                        <img src="{{ $item->getImagePrev() }}" alt="" />
                      </picture>
                    </a>
                     <a href="javascript:;" data-fancybox data-type="ajax" data-src="{{ route('detail',['slug'=>$item->slug]) }}" style="text-decoration: none;"><h4>{{ $item->title }}</h4></a>
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
            <article class="itemscope post_item post_item_single post_featured_default post_format_standard post-1150 page type-page status-publish hentry" itemscope itemtype="http://schema.org/Article">
                <section class="post_content" itemprop="articleBody">
                    <div class="sc_reviews alignright"><!-- #TRX_REVIEWS_PLACEHOLDER# --></div>



                    <!-- о нас-->
                    @foreach($about as $item)
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
                                                <div class="sc_section small_slider bg_tint_none aligncenter" style="width:100%; width:100%;">
                                                    <div class="wpb_revslider_element">
                                                        <div
                                                             class="sc_slider sc_slider_swiper swiper-slider-container sc_slider_height_fixed sc_slider_controls sc_slider_pagination"
                                                             >
                                                            <div class="slides swiper-wrapper">
                                                                <div  data-style="width:373px;height:287px;">
                                                                    <img src="{{ $item->getImage() }}" alt="" height="280">
                                                                </div>

                                                            </div>
                                                            <div class="sc_slider_pagination_wrap"></div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="column-1_2 sc_column_item sc_column_item_2 even">

                                                <h2 class="sc_title sc_title_regular no_bottom_border">{{ $item->title }}</h2>

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
                                <span style="color: #ffffff; font-size: 5em; font-weight: 200;line-height: 1em;">
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
                                    <span style="font-weight: bold; color: #f74f08;">предприятие,производит Стабилизаторы </span><br>
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
                                            <h2 class="sc_title sc_title_regular sc_align_center bottom_border" style="text-align:center;">Продукция</h2>

                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">

                                                </div>
                                            </div>
                                            <div class="sc_content content_wrap"
                                                 style="margin-top:6em !important;margin-bottom:5em !important;">



                                                <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_4">


                                                    @foreach($order as $item)
                                                    <div class="column-1_4 sc_column_item sc_column_item_1 odd first"
                                                         style="text-align:none;">


        <div class="post_featured">
            <div class="post_thumb" data-image="/public/fazka/images/istock_000014378598medium.jpg" data-title="We Need a Manufacturing Renaissance">
                <a class="hover_icon hover_icon_link" href="#" title="

                    ">
 <img class="wp-post-image" width="400" height="225" alt="We Need a Manufacturing Renaissance" src="{{ $item->getImagePrev() }}">
                </a>
            </div>
        </div>





                                                        <h4 class="sc_title sc_title_regular sc_align_center no_bottom_border"
                                                            style="margin-top:1em;text-align:center;">{{ $item->title }}</h4>

                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <p style="text-align: center;">{!! str_limit($item->anonce,150) !!} <br/>
                                                                    <a href="{{ route('detail',['slug'=>$item->slug]) }}"
                                                                       class="sc_button sc_button_square sc_button_style_style-8 sc_button_bg_custom sc_button_size_medium  sc_button_iconed inherit"
                                                                       style="margin-top:1em;">
                                                                        <span class="button-up">подробно</span>
                                                                        <span>подробно</span>
                                                                    </a></p>

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
                    @if(count($gallery)>0)
                    <!-- Галерея-->
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
                            <div class="wpb_wrapper">
                                <a name="ourprojects" id="ourprojects" class="sc_anchor" title="Projects" data-description="Our projects"
                                   data-icon="icon-picture-1" data-url="" data-separator="no"></a>

                                <div class="sc_section bg_tint_none" data-animation="animated fadeInUp normal"
                                     style="margin-top:6em !important;margin-bottom:5.5em !important;">
                                    <div class="sc_content content_wrap">
                                        <h2 class="sc_title sc_title_regular sc_align_center bottom_border" style="text-align:center;">Галерея</h2>


                                        <div class="sc_content content_wrap" style="margin-top:6em !important;margin-bottom:5em !important;">



                                            <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_4">

@foreach($gallery as $item)
            <div class="column-1_4 sc_column_item sc_column_item_1 odd first" style="text-align:none;">


                <div class="post_featured">
                    <div class="post_thumb">
                        <a class="hover_icon hover_icon_link" href="{{ $item->getImageBig() }}" data-fancybox="gallery" />
   <img class="wp-post-image" width="400" height="225" src="{{ $item->getImage() }}">
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
                                                    </a></p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Галерея-->
                    @endif





                    @if(count($video)>0)
                    <!-- Галерея-->
                        <div class="vc_row wpb_row vc_row-fluid" style="background-color:#f7f7f9; ">
                            <div class="vc_col-sm-12 wpb_column vc_column_container ">
                                <div class="wpb_wrapper">
                                    <a name="ourprojects" id="ourprojects" class="sc_anchor" title="Projects" data-description="Our projects"
                                       data-icon="icon-picture-1" data-url="" data-separator="no"></a>

                                    <div class="sc_section bg_tint_none" data-animation="animated fadeInUp normal"
                                         style="margin-top:6em !important;margin-bottom:5.5em !important;">
                                        <div class="sc_content content_wrap">
                                            <h2 class="sc_title sc_title_regular sc_align_center bottom_border" style="text-align:center;">Видеоблог</h2>


                                            <div class="sc_content content_wrap" style="margin-top:6em !important;margin-bottom:5em !important;">



                                                <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_4">

                                                    @foreach($video as $item)
                                                        <div class="column-1_4 sc_column_item sc_column_item_1 odd first" style="text-align:none;">


                                                            <div class="post_featured">
                                                                <div class="post_thumb">
                                                                    <a class="hover_icon hover_icon_link" href="{{ $item->showlink }}" data-fancybox />


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
                                                        </a></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Галерея-->
                    @endif


                    @if(count($news)>0)
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="vc_col-sm-12 wpb_column vc_column_container ">
                            <div class="wpb_wrapper">
                                <a id="news" class="sc_anchor" title="Blog" data-description="Industry News"
                                   data-icon="icon-docs" data-url="" data-separator="no"></a>

                                <div class="sc_section bg_tint_none" data-animation="animated fadeInUp normal"
                                     style="margin-top:6em !important;margin-bottom:4.5em !important; ">
                                    <div class="sc_content content_wrap">
                                        <h2 class="sc_title sc_title_regular sc_align_center bottom_border" style="text-align:center;">Новости</h2>

                                        <div id="sc_blogger_1808768584"
                                             class="sc_blogger layout_classic_4 template_masonry sc_blogger_horizontal">
                                            <div class="isotope_wrap" data-columns="4">

                                                @foreach($news as $item)
                                                <div class="isotope_item isotope_item_classic isotope_item_classic_4 isotope_column_4">
                                                    <div class="post_item post_item_classic post_item_classic_4 post_format_standard odd">

                                                        <div class="post_featured">
                                                            <div class="post_thumb"
                                                                 data-image="images/istock_000014378598medium.jpg"
                                                                 data-title="We Need a Manufacturing Renaissance">
                                                                <a class="hover_icon hover_icon_link" href="#">
                                                                    <img class="wp-post-image"
                                                                         width="250"
                                                                         height="141"
                                                                         alt="We Need a Manufacturing Renaissance"
                                                                         src="{{ $item->getImage() }}"></a>
                                                            </div>
                                                        </div>

                                                        <div class="post_content isotope_item_content">

                                                            <h4 class="post_title" >
                                                                <a href="{{ route('newsdetail',['slug'=>$item->slug]) }}">{{ $item->title }}</a>
                                                            </h4>



                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <p style="text-align: center;">

                                                                        {!! str_limit($item->anonce,150) !!}

                                                                    </p>


<br>
                                                                        <a href="{{ route('newsdetail',['slug'=>$item->slug]) }}"
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