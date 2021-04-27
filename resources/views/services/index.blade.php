@extends("main.main")



@section('content')
<style type="text/css">
    .product-item-title {
        height: 30px;
    }
</style>


<main>
            <div class="banner">
                <div class="overlay"><h1 align="center">Услуги</h1></div>
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

                            <div class="catalog-list">
                                <div class="row">
                                    @if($services->count()>0)
                                    @foreach($services as $item)

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                    <a
                      сlass="product-item wow fadeInUp"
                    data-wow-duration="1s"
                    data-fancybox
                    data-type="ajax"
                    data-src="{{ route('servicesdetail',['id'=>$item->id]) }}"
                    href="javascript:;"
                    >
                      <span
                        style="background-image: url({{ $item->getImage() }})"
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
                                            Услуг нет
                                        </section>
                                    @endif

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.catalog-list -->
    <!--                         <div class="row">
                                <div class="col-sm-6 pagination-wrapper">
                                    <ul class="pagination">
                                        <li><a href="#">|&lt;</a></li>
                                        <li><a href="#">&lt;</a></li>
                                        <li class="active"><span>1</span></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&gt;</a></li>
                                        <li><a href="#">&gt;|</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 results-pagination">
                                    Показано с 1 по 15 из 62 (всего 5 страниц)
                                </div>
                            </div> -->
                            <!-- /.row -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>

    </main>




@endsection

