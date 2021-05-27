@extends("main.main")

@section('content')
    <div class="event-detail-page">

        <div class="inner-pages">
            <h1 class="title">{{ $product->title }}</h1>
            <ul class="breadcrumbs">
                <li><a href="/">Главная</a></li>
                <li><a href="/events">Мероприятия</a></li>
                <li><a href="">{{ $product->title }}</a></li>
            </ul>
            <br>

            <br>

            <div class="container">
                <div class="product">
                    <div class="description">
                        {!! $product->anonce !!}
                    </div>
                    <div class="img-container">
                        <img src="{{ $product->getImage() }}" loading="lazy" style="margin:0; max-width: 100%;" alt="">
                    </div>
                    <div class="description">
                        {!! $product->text !!}
                    </div>

                    <br>
                    <br>
                    <a href="#" class="orange-btn big">Получить консультацию</a>
                </div>



            </div>
        </div>


        <div class="container">
            @include('_some-parts.send-email')
        </div>
    </div>
@endsection
