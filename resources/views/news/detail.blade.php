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
                            <p>Вт-Вс: с 12:00 до 24:00, Пн: выходной <br> Первый этаж</p>
                            <br>

                            @if (count($media_library_menu))
                                <a class="start-menu meta-info">Меню</a>
                            @endif
                            @if (count($media_library_map))
                                <a class="start-map meta-info">Винная карта</a>
                            @endif

                            <br>

                            <div style="border: 1px solid #F1F1F1; margin-bottom: 12px;"></div>
                            <br>
                            <div class="bottom">
                                <a data-toggle="modal" onclick="

                                    document.querySelector('.input-hotel').value = 
                                    '{{$news->title}}';
                                    return false;
                                " data-target="#book" class="orange-btn big">Забронировать столик</a>
                            </div>
                        </div>
                    </div>
                    <div class="img-container">
                        <img src="{{ $news->getImageBig() }}" loading="lazy" style="margin:0; max-width: 100%;" alt="">
                    </div>
                </div>

                <div style="display: none;">
                    @foreach ($media_library_map as $val)
                        <a data-fancybox="map"> <img data-fancybox="map" class="restaurant-map" loading="lazy"
                                src="{{ $val->getImage('big') }}" alt="">
                        </a>
                    @endforeach

                    @foreach ($media_library_menu as $val)
                        <a data-fancybox="menu">
                            <img data-fancybox="menu" class="restaurant-menu" loading="lazy"
                                src="{{ $val->getImage('big') }}" alt="">
                        </a>
                    @endforeach
                </div>


            </div>
        </div>



        <div class="container">
            @include('_some-parts.send-email')
        </div>

    </div>
@endsection
