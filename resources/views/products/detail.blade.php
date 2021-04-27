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
                                {!! $product->text !!}
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
