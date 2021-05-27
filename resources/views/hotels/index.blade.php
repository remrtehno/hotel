@extends("main.main")

@section('content')
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

            <div class="hotels-page even-items-change">
                @foreach ($items as $item)
                    <div class="hotel-wrapper">
                        <div class="img-container">
                            <img class="lozad" style="max-width: 100%; margin: 0; width: 100%;" loading="lazy"
                                src="{!! $item->getImage() !!}" alt="">
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
                                <pre>   </pre>
                                <a href="{{ route('hotel-detail', $item->slug) }}" class="orange-btn small">Подробнее</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
