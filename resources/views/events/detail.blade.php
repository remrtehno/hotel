@extends("main.main")

@section('content')
    <div class="hotel-detail-page">
        <div class="inner-pages">
            <h1 class="title">{{ $product->title }}</h1>
            <ul class="breadcrumbs">
                <li><a href="/">Главная</a></li>
                <li><a href="/hotels">Номера</a></li>
                <li><a href="">{{ $product->title }}</a></li>
            </ul>
            <br>

            <br>

            <div class="container">
                <div class="product">
                    <div class="description">
                        <h3>Описание</h3>
                        {!! $product->description !!}
                        <br>
                        <div class="product-container">

                            <h3>Удобства номера</h3>

                            <div class="comfort">
                                {!! $product->comfort !!}
                            </div>

                            @include('hotels.notice')
                            <div style="border: 1px solid #F1F1F1; margin-bottom: 12px;"></div>

                            <h3>Стоимость номера</h3>
                            <div class="bottom">
                                <div class="cost">
                                    {!! $product->cost !!}
                                </div>
                                <a href="#" class="orange-btn big">Забронировать</a>
                            </div>
                        </div>
                    </div>
                    <div class="img-container">
                        <img src="{{ $product->getImage() }}" style="margin:0; max-width: 100%;" alt="">
                    </div>
                </div>



            </div>
        </div>



        <div class="container">
            @include('_some-parts.send-email')
        </div>

    </div>
@endsection
