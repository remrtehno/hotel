@extends("main.main")

@section('content')

    <br>
    <br>

    <div class="container">
        <div class="product-container">

            @include('products.sidebar')


            <div class="product__info">
                <div class="product__row">
                    <div class="product__info-left">
                        <div class="product__section" id="section668">
                            <h3 class="product__desc-title">{{ $product->title }}</h3>
                            <div class="product__txt ">
                                {!! str_limit($product->anonce, 350) !!}
                            </div>


                            

                            <h3 class="product__desc-title">Базовые клинические сценарии</h3>
                            <div class="product__txt ">
                                <ol>
                                    <li>Обострение хронической сердечной недостаточности</li>
                                    <li>Острый респираторный дистресс-синдром</li>
                                    <li>Поражение мозга с тромболитической терапией</li>
                                    <li>Сепсис с гипотонией</li>
                                    <li>Автомобильная авария и гиповолемический шок</li>
                                </ol>
                                <h4>&nbsp;</h4>
                            </div>
                        </div>
                        <div class="product__section" id="section1631">
                            <h3 class="product__desc-title">Дополнительная информация</h3>
                            <div class="product__txt ">
                                <p><a href="assets/files/roboty-simulyatory/afina/afina.pdf">Презентация "Афина,
                                        робот-симулятор женщины VI класса реалистичности"</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="product__info-right">
                        <div class="product__images">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
