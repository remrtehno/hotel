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
                В нашем отеле для жителей и гостей города представлены 54 комфортных номера категории Люкс, Сюит и Стандарт,
                в
                каждом номере созданы все условия для плодотворной работы и приятного отдыха: ванная комната с душевой
                кабиной,
                фен, туалетные принадлежности, удобная кровать, функциональная рабочая зона, спутниковое телевидение,
                кондиционер, сейф. Высокоскоростной WiFi и телефон с междугородной и международной связью. У нас также
                имеется
                специально оборудованный номер для лиц с ограниченными возможностями здоровья и номера, которые
                предусматривают
                размещение гостей с домашними животными. Мы постарались учесть все нюансы в оформлении и наполнении номеров,
                чтобы на время вашей поездки отель "РОЯЛ ПЛАЗА" стал для вас уютным домом
            </p>
            <br>
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
