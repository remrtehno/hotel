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
                            <img src="{{ $item->getImage('medium') }}" loading="lazy" style="margin:0; max-width: 100%;"
                                alt="">
                        @endforeach
                    </div>
                    <div class="description">
                        {!! $items->text !!}
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
