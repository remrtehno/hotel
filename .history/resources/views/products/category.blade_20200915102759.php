@extends("main.main")



@section('content')
<style type="text/css">
    .product-item-title {
        height: 30px;
    }
         .product-item-image {
              background-position: center center;
          background-size: 113%;
     }
</style>




<main>
            <div class="banner">
                <div class="overlay"><h1 align="center">Каталог</h1></div>
            </div>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-sm-3">
                            <div class="panel-wrapper">
                                <div class="katalog katalog_lmnu">
                                    <a href="#" class="katalog katalog_link_white">Навигация</a>
                                </div>
                                <!-- /.katalog katalog_lmnu -->
                                <div class="leftmnunw">
                                    <ul class="left left_menu">
                                        @foreach($cat as $item)
                                        <li>
                                            <a href="{{ route('category',['slug'=>$item->slug]) }}">
                                                <span>{{ $item->title }}</span>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <!-- /.left left_menu -->
                                </div>
                                <!-- /.leftmnunw -->
                            </div>
                        </div>
                        <div class="col-md-9 col-lg-9 col-sm-9">
                            <h2>{{$title}}</h2>
                            <div class="catalog-list">
                                <div class="row">
                                    @if($products->count()>0)
                                    @foreach($products as $item)


                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                                        <a
                                            class="product-item wow fadeInUp"
                                            data-wow-duration="1s"
                                            data-fancybox
                                            data-type="ajax"
                                            data-src="{{ route('detail',['slug'=>$item->slug]) }}"
                                            href="javascript:;"
                                        >
                                            <span
                                                style="background-image: url('{{ $item->getImage() }}')"
                                                class="product-item-image"
                                            ></span>
                                            <!-- /.image -->
                                            <h5 class="product-item-title" align="center">
                                                {{ $item->title }}
                                            </h5>
                                        </a>
                                    </div>
                                    @endforeach

                                    @else
                                        <section class="col-lg-12" >
                                            Продукции в данной категории нет!
                                        </section>
                                    @endif

                                </div>
                                <!-- /.row -->
                            </div>

                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>

    </main>




@endsection

