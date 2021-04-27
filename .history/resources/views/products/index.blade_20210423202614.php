@extends("main.main")



@section('content')

    <br>
    <br>
    <div class="container">
        <div class="page-title">
            <h1>Продукция</h1>
        </div>

        <div class="content">
            @yield('sidebar')
            <!-- BEGIN PRODUCTS -->
            <div class="products">

                @foreach ($products as $item)
                    <a class="products__item" href="{{ route('detail', ['slug' => $item->slug]) }}">
                        <div class="products__img">
                            <img src="{{ $item->getImage() }}" alt="{{ $item->getImage() }}">
                        </div>
                        <p class="products__name">{{ $item->title }}</p>
                        <div class="products__desc">{!! str_limit($item->anonce, 350) !!}</div>
                        <p class="products__code">Код товара: CH.CSR-100, CH.CSR-101</p>
                    </a>

                @endforeach
            </div>

            <!-- END PRODUCTS -->
        </div>



    @endsection
