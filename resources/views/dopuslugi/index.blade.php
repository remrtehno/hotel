@extends("main.main")

@section('content')
    <style>
        .inner-header {
            background-image: url(/images/BG/extra-services-bg.jpg);
        }

    </style>
    <div class="inner-pages">
        <h1 class="title"> Дополнительные услуги</h1>
        <ul class="breadcrumbs">
            <li><a href="/">Главная</a></li>
            <li><a href="#"> Дополнительные услуги</a></li>
        </ul>
        <br>
        <br>

        <div class="container">
            <div class="page-title">
            </div>
            <p>
<b>Дополнительные услуги отеля Royal Plaza. </b><br/><br/>
Мы стремимся окружить каждого гостя заботой и создать максимально комфортные условия пребывания в нашем комплексе. <br/>
<br/>К Вашим услугам трансфер на автомобилях премиум-класса. Наш водитель встретит Вас в аэропорту, на вокзале или в любом другом месте по предварительному согласованию. 
<br/>А расслабиться после насыщенного дня, набраться сил для новых свершений, поможет наша уютная сауна. 
<br/><br/>Планируете мероприятие? Мы организуем оформление наших залов и автомобилей, чтобы Ваше торжество прошло в незабываемой атмосфере, а фотоальбом радовал светлыми воспоминаниями еще много лет.

<br/><br/><b>Подробная информация и заказ услуг по тел. 8 (3463) 25-00-00.</b>

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
