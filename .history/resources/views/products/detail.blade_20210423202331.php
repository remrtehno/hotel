



@extends("main.main")



@section('content')


<div class="modal-container ajax-product">
    <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
                <img
                    src="{{ $product->getImage('home') }}"
                    class="img-responsive ajax-product-image"
                    alt=""
                />
            </div>
            <!-- /.col-md-6 -->
            <div class="col-md-6">
                <h4 class="modal-title">{{ $product->title }}</h4>
                <div>
                    {!! str_limit($product->anonce,350) !!}
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
</div>









@endsection