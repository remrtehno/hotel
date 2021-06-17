@extends("main.main")

@section('content')
    <div class="hotel-detail-page">
        <div class="inner-pages">
            <h1 class="title">{{ $news->title }}</h1>
            <ul class="breadcrumbs">
                <li><a href="/">Главная</a></li>
                <li><a href="/bars">Рестораны и бары</a></li>
                <li><a href="">{{ $news->title }}</a></li>
            </ul>
            <br>

            <br>

            <div class="container">
                <div class="product">
                    <div class="description">
                        <h3>Описание</h3>
                        {!! $news->text !!}
                        <br>
                        <div class="product-container">

                            <h3>Дополнительная информация</h3>

                            <div class="anonce">
                                {!! $news->meta_info !!}
                            </div>

                            <br>


                            <h3>Режим работы и расположение</h3>
                            <p>{{ $news->time }}</p>
                            <p>{{ $news->floor }}</p>
                            <br>



                            @if (count($media_library_menu))
                                <a class="start-menu meta-info" click-attr target=".menu-rest">Меню</a>
                            @endif
                            @if (count($media_library_map))
                                <a class="start-map meta-info" click-attr target=".map">Винная карта</a>
                            @endif

                            @if (count($media_library_file_cigarette))
                                <a class="start-cigarette meta-info" click-attr target=".cigar">Сигарная карта</a>
                            @endif


                            <div style="display: none;">
                                @foreach ($media_library_map as $val)
                                    <a data-fancybox="map" class="map"> <img data-fancybox="map" class="restaurant-map"
                                            src="{{ $val->getImage('big') }}" alt="">
                                    </a>
                                @endforeach

                                @foreach ($media_library_menu as $val)
                                    <a data-fancybox="menu" class="menu-rest">
                                        <img data-fancybox="menu" class="restaurant-menu"
                                            src="{{ $val->getImage('big') }}" alt="">
                                    </a>
                                @endforeach

                                @foreach ($media_library_file_cigarette as $val)
                                    <a data-fancybox="cigar" class="cigar">
                                        <img data-fancybox="cigar" class="restaurant-menu-cigar"
                                            src="{{ $val->getImage('big') }}" alt="">
                                    </a>
                                @endforeach
                            </div>



                            <br>

                            <div style="border: 1px solid #F1F1F1; margin-bottom: 12px;"></div>
                            <br>
                            <div class="bottom">
                                <a data-toggle="modal" onclick="

                                                                                                                document.querySelector('.input-hotel').value = 
                                                                                                                '{{ $news->title }}';
                                                                                                                return false;
                                                                                                            "
                                    data-target="#book" class="orange-btn big">Забронировать
                                    столик</a>
                            </div>
                        </div>
                    </div>
                    <div class="img-container">
                        <div class="flexslider {{ count($media_library_gallery) === 1 ? 'hide-nav' : '' }}">
                            <ul class="slides">
                                @foreach ($media_library_gallery as $val)
                                    <li>
                                        <a data-fancybox="gallery" href="{{ $val->getImage('big') }}">
                                            <img style="width: 100%; margin: auto; display: block;"
                                                src="{{ $val->getImage() }}" alt="">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>




            </div>
        </div>



        <div class="container">
            @include('_some-parts.send-email')
        </div>

    </div>
@endsection
