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

                        @foreach ($cat as $item)

                            <a href="{{ route('category', ['slug' => $item->slug]) }}" class="form__checkbox">
                                <label for="check32">
                                    <span>{{ $item->title }}</span>
                                </label>
                            </a>

                        @endforeach




                    </div>


                </form>
                <!-- END FILTER -->
            </aside>
            <!-- BEGIN PRODUCTS -->
            <div class="products">
                
                @foreach ($products as $item)
                <a class="products__item" href="roboty-simulyatory/cezar.html" data-type="10" data-skill="16,53,19,21,45,46"
                    data-spec="26,35,63,64,65,66">
                    <div class="products__img">
                        <img src="img/cezar-170x123-137.jpeg" alt="Цезарь">
                    </div>
                    <p class="products__name">Цезарь</p>
                    <p class="products__desc">Самый прочный робот-симулятор в мире</p>
                    <p class="products__code">Код товара: CH.CSR-100, CH.CSR-101</p>
                </a>

            <section class="lefd">
                <figure class="sc_image  sc_image_shape_square"
                    style="margin-bottom:2.8571em !important;">
                    <img src="" alt="">
                </figure>
                <h3 class="sc_title sc_title_regular"><a
                        href="{{ route('detail', ['slug' => $item->slug]) }}">{{ $item->title }}</a>
                </h3>

                <div
                    class="wpb_text_column wpb_content_element  custom_1432116266774">
                    <div class="wpb_wrapper">
                        <p>
                        <p>{!! str_limit($item->anonce, 350) !!} </p>
                        </p>


                        <a href="{{ route('detail', ['slug' => $item->slug]) }}"
                            class="sc_button sc_button_square sc_button_style_button-2 sc_button_bg_link sc_button_size_medium add_link"
                            style="margin-right:15px; ">
                            <span class="button-up">подробно</span>
                            <span>подробно</span>
                        </a>
                    </div>
                </div>
            </section>
        @endforeach
            </div>

            <!-- END PRODUCTS -->
        </div>



    @endsection
