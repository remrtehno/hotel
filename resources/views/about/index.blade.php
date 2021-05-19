@extends("main.main")

@section('content')
    <h1 class="title">Об отеле</h1>
    <ul class="breadcrumbs">
        <li><a href="/">Главная</a></li>
        <li><a href="#">Об отеле</a></li>
    </ul>
    <br>
    <br>
    <div class="container">
        <div class="page-title">
        </div>
        <div class="about-page">
            @foreach ($about as $item)
                {!! $item->content !!}
            @endforeach
        </div>
    </div>
@endsection
