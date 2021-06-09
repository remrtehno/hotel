@extends("main.main")

@section('content')
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
                В нашем отеле для жителей и гостей города представлены 54 комфортных номера категории Люкс, Сюит и Стандарт,
                в каждом номере созданы все условия для плодотворной работы и приятного отдыха: ванная комната с душевой
                кабиной, фен, туалетные принадлежности, удобная кровать, функциональная рабочая зона, спутниковое
                телевидение, кондиционер, сейф.
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
                                    loading="lazy" src="{!! $item->getImage('big') !!}" alt="">
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
