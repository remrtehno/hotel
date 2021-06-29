@extends("main.main")

@section('content')
    <style>
        .inner-header {
            background-image: url(/images/BG/hotels-bg.jpg);
        }

    </style>
    <div class="inner-pages">
        <h1 class="title">Номера</h1>
        <ul class="breadcrumbs">
            <li><a href="/">Главная</a></li>
            <li><a href="#">Номера</a></li>
        </ul>
        <br>
        <br>

        <div class="container">
            <div class="page-title">
            </div>
            <p>
                В нашем отеле представлены 54 комфортных номера категории Стандарт, Junior Suite и Люкс. В каждом номере
                созданы все условия для плодотворной работы и приятного отдыха. <br /><br />
                Мы постарались учесть все нюансы в оформлении и наполнении номеров Роял Плаза, чтобы у Вас остались только
                положительные впечатления от пребывания в нашем отеле.<br /><br />
                Для гостей с ограниченными возможностями здоровья мы предоставляем номера, оборудованные с учётом их
                повышенных потребностей. А для постояльцев, заселяющихся с домашними животными предлагаем комфортное
                размещение с питомцем.<br />
            </p>
            <br />

            <div class="hotels-page even-items-change">
                @foreach ($items as $item)
                    <div class="hotel-wrapper">
                        <div class="img-container">
                            <div data-autoplay-disabled="true"
                                class="flexslider {{ count($item->getMediaLibrary()) === 0 ? 'hide-nav' : '' }}">
                                <ul class="slides fancybox-slides">
                                    @foreach ($item->getMediaLibrary() as $key => $val)
                                        <li>
                                            <a data-fancybox="gallery-{{ $item->slug }}"
                                                href="{{ $val->getImage('big') }}"></a>
                                            <img {{ $key ? 'loading=lazy' : null }}
                                                style="width: 100%; margin: auto; display: block;"
                                                src="{{ $val->getImage() }}" alt="">

                                        </li>
                                    @endforeach
                                </ul>
                            </div>


                        </div>
                        <div class="description-section">
                            <br>
                            <h3 class="title-section">
                                {!! $item->title !!}
                            </h3>
                            <div class="comfort">
                                {!! $item->comfort !!}
                            </div>
                            @include('hotels.notice')

                            <div class="bottom">
                                {!! $item->cost !!}
                                <a href="{{ route('hotel-detail', $item->slug) }}" class="orange-btn small">Подробнее</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
