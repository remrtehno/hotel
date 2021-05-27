@extends("main.main")

@section('content')
    <div class="inner-pages">
        <h1 class="title">Дополнительные услуги</h1>
        <ul class="breadcrumbs">
            <li><a href="/">Главная</a></li>
            <li><a href="#">Дополнительные услуги</a></li>
        </ul>
        <br>
        <br>

        <div class="container">
            @include('extra-services.content')
        </div>
    </div>
@endsection
