@extends("main.main")



@section('content')

    <br>
    <br>
    <div class="container">
        <div class="page-title">
            <h1>Продукция</h1>
        </div>

        <div class="content">
            <aside class="sidebar">
                <!-- BEGIN FILTER -->
                <form class="filter" action="">
                    <!-- Sort Fields -->
                    <input type="hidden" name="sortby" value="menuindex">
                    <input type="hidden" name="sortdir" value="ASC">
                    <!-- Sort End -->


                    <div class="filter__section">
                        <p class="filter__title">Категории</p>

                        @foreach ($cat as $item)

                            <a href="{{ route('category', ['slug' => $item->slug]) }}" class="form__checkbox">
                                <label for="check32">
                                    <span>{{ $item->title }}</span>
                                </label>
                            </a>

                        @endforeach




                    </div>


                </form>
                <!-- END FILTER -->
            </aside>
            <!-- BEGIN PRODUCTS -->
            <div class="products">

                @foreach ($products as $item)
                    <a class="products__item" href="{{ route('detail', ['slug' => $item->slug]) }}">
                        <div class="products__img">
                            <img src="{{ $item->getImage() }}" alt="{{ $item->getImage() }}">
                        </div>
                        <p class="products__name">{{ $item->title }}</p>
                        <div class="products__desc">{!! str_limit($item->anonce, 350) !!}</p>
                        <p class="products__code">Код товара: CH.CSR-100, CH.CSR-101</p>
                    </a>

                @endforeach
            </div>

            <!-- END PRODUCTS -->
        </div>



    @endsection
