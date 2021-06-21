@extends("main.main")

@section('content')
    <div class="inner-pages">
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
    </div>

    <div class="container">
        <div class="rules-of-life">
            <h3 class="title">Правила проживания в отеле</h3>
            <a href="/rules-of-life" target="blank">Ознакомиться с правилами
                <svg width="25" height="12" viewBox="0 0 25 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M24.5303 6.53033C24.8232 6.23743 24.8232 5.76256 24.5303 5.46967L19.7574 0.696697C19.4645 0.403804 18.9896 0.403804 18.6967 0.696698C18.4038 0.989591 18.4038 1.46446 18.6967 1.75736L22.9393 6L18.6967 10.2426C18.4038 10.5355 18.4038 11.0104 18.6967 11.3033C18.9896 11.5962 19.4645 11.5962 19.7574 11.3033L24.5303 6.53033ZM6.55671e-08 6.75L24 6.75L24 5.25L-6.55671e-08 5.25L6.55671e-08 6.75Z"
                        fill="#D09870" />
                </svg>

            </a>
        </div>
    </div>
@endsection
