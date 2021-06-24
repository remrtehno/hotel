@extends("main.main")

@section('content')
    <div class="event-detail-page">

        <div class="inner-pages">
            <h1 class="title">{{ $items->title }}</h1>
            <ul class="breadcrumbs">
                <li><a href="/">Главная</a></li>
                <li><a href="/extra-services"> Дополнительные услуги</a></li>
                <li><a href="">{{ $items->title }}</a></li>
            </ul>
            <br>

            <br>

            <div class="container">
                <div class="items">
                    <div class="description">
                        {!! $items->anonce !!}
                    </div>
                    <div class="img-container">
                        @foreach ($items->getMediaLibrary() as $item)
                            <img src="{{ $item->getImage('medium') }}" style="margin:0; max-width: 100%;" alt="">
                        @endforeach
                    </div>
                    <div class="description">
                        {!! $items->text !!}
                    </div>

                    @if (count($media_library_menu))
                        <a class="start-menu meta-info" click-attr target=".menu-rest">Меню</a>
                    @endif
                    @if (count($media_library_map))
                        <a class="start-map meta-info" click-attr target=".map">Винная карта</a>
                    @endif

                    @if (count($media_library_file_cigarette))
                        <a class="start-cigarette meta-info" click-attr target=".cigar">Сигарная карта</a>
                    @endif

                    @if (count($media_library_kalyan))
                        <a class=" meta-info" click-attr target=".kalyan">Кальянная карта</a>
                    @endif

                    <div style="display: none;">
                        @foreach ($media_library_map as $key => $val)
                            <a data-fancybox="map" href="{{ $val->getImage('original-size') }}" class="map">
                                <img {{ $key ? 'loading=lazy' : null }} style="max-width: 100%" class="restaurant-map"
                                    src="{{ $val->getImage('original-size') }}" alt="">
                            </a>
                        @endforeach

                        @foreach ($media_library_menu as $key => $val)
                            <a data-fancybox="menu" href="{{ $val->getImage('original-size') }}" class="menu-rest">
                                <img {{ $key ? 'loading=lazy' : null }} style="max-width: 100%" class="restaurant-menu"
                                    src="{{ $val->getImage('original-size') }}" alt="">
                            </a>
                        @endforeach

                        @foreach ($media_library_file_cigarette as $key => $val)
                            <a data-fancybox="cigar" href="{{ $val->getImage('original-size') }}" class="cigar">
                                <img {{ $key ? 'loading=lazy' : null }} style="max-width: 100%"
                                    class="restaurant-menu-cigar" src="{{ $val->getImage('original-size') }}" alt="">
                            </a>
                        @endforeach

                        @foreach ($media_library_kalyan as $key => $val)
                            <a data-fancybox="kalyan" href="{{ $val->getImage('original-size') }}" class="kalyan">
                                <img {{ $key ? 'loading=lazy' : null }} style="max-width: 100%"
                                    class="restaurant-menu-cigar" src="{{ $val->getImage('original-size') }}" alt="">
                            </a>
                        @endforeach
                    </div>

                    <br>
                    <br>
                    <a href="#" data-toggle="modal" data-target="#wait-callback" class="orange-btn big">Получить
                        консультацию</a>
                </div>



            </div>
        </div>


        <div class="container">
            @include('_some-parts.send-email')
        </div>
    </div>
@endsection
