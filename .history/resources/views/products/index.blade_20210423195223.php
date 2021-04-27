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
                <a class="products__item" href="roboty-simulyatory/cezar.html" data-type="10" data-skill="16,53,19,21,45,46"
                    data-spec="26,35,63,64,65,66">
                    <div class="products__img">
                        <img src="img/cezar-170x123-137.jpeg" alt="Цезарь">
                    </div>
                    <p class="products__name">Цезарь</p>
                    <p class="products__desc">Самый прочный робот-симулятор в мире</p>
                    <p class="products__code">Код товара: CH.CSR-100, CH.CSR-101</p>
                </a>
                            </div>
            
            <!-- END PRODUCTS -->
        </div>



    @endsection
