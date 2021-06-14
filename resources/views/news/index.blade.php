@extends("main.main")



@section('content')
    <div class="inner-pages">
        <h1 class="title">Рестораны и бары</h1>
        <ul class="breadcrumbs">
            <li><a href="/">Главная</a></li>
            <li><a href="/bars">Рестораны и бары</a></li>
        </ul>
        <br>
        <br>

        <div class="container">
            <div class="page-title">
            </div>
            <p>
                Роял Плаза отличается не только комфортными номерами, но и разнообразием мест для отдыха, встреч с друзьями и деловых переговоров. К вашим услугам несколько кафе с международной кухней, бары с большим выбором напитков, сигарная комната, караоке зал, ресторан и ночной клуб.<br/><br/>
В отеле Роял Плаза у вас не возникнет вопроса, где интересно провести свободный вечер!
            </p>
            <br>

            <div class="hotels-page">
                @foreach ($news as $item)
                    <div class="hotel-wrapper">
                        <div class="img-container">
                            <img class="lozad" style="max-width: 100%; margin: 0; width: 100%;" loading="lazy"
                                src="{!! $item->getImageBig() !!}" alt="">
                        </div>
                        <div class="description-section">
                            <br>
                            <h3 class="title-section">
                                {!! $item->title !!}
                            </h3>
                            <div class="description">
                                {!! $item->text !!}
                            </div>
                            <div class="anonce">
                                {!! $item->anonce !!}
                            </div>
                            <div class="comfort">
                                {!! $item->meta_info !!}
                            </div>
                            @include('news.notice')

                            <div class="bottom">
                                <a href="{{ route('newsdetail', $item->slug) }}"
                                    class="orange-btn small">Подробнее</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
