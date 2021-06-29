@extends("main.main")

@section('content')
    <style>
        .inner-header {
            background-image: url(/images/BG/events-bg.png), url(/images/inner-nd-bg.png);
        }

    </style>
    <div class="inner-pages">
        <h1 class="title">Мероприятия</h1>
        <ul class="breadcrumbs">
            <li><a href="/">Главная</a></li>
            <li><a href="#">Мероприятия</a></li>
        </ul>
        <br>
        <br>

        <div class="container">
            <div class="page-title">
            </div>
            <p>
                Событие любого формата приобретает особый статус и становится незабываем, если проходит в Отеле Роял Плаза:
                свадьбы, банкеты, конференции, фуршеты. Мы предлагаем разный формат многофункциональных залов отеля – от
                камерного и изысканного ресторана до уютного и мягкого лаунж. Благодаря этому возможно проведение
                мероприятий любого уровня: как деловых конференций, так и пышных свадеб или торжественных банкетов.

            </p>
            <br>
            <br>

            <div class="events-page">
                <div class="grid-container">
                    @foreach ($items as $item)
                        <div class="events-wrapper">
                            <div class="img-container">
                                <img class="lozad"
                                    style="object-fit: cover;
                                                                                height: 400px; max-width: 100%; margin: 0; width: 100%;"
                                    src="{!! $item->getImage('big') !!}" alt="">
                            </div>
                            <div class="description-section">
                                <div>
                                    <h3 class="title-section">
                                        {!! $item->title !!}
                                    </h3>

                                    <div class="description">
                                        {!! $item->anonce !!}
                                    </div>


                                    <div class="bottom">
                                        <a href="{{ route(isset($ROUTE) ? $ROUTE : 'eventsdetail', $item->slug) }}"
                                            class="events-detail-link">
                                            <svg width="26" height="2" viewBox="0 0 26 2" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <line x1="-8.74228e-08" y1="1" x2="26" y2="0.999998" stroke="#D09870"
                                                    stroke-width="2" />
                                            </svg>
                                            Подробнее
                                        </a>
                                    </div>
                                    <a style="
                                                                                            position: absolute;
                                                                                            left: 0;
                                                                                            right: 0;
                                                                                            top: 0;
                                                                                            bottom: 0;
                                                                                          "
                                        href="{{ route(isset($ROUTE) ? $ROUTE : 'eventsdetail', $item->slug) }}"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        </div>
    </div>
@endsection
