@extends("main.main")



@section('content')

    <br>
    <br>
    <div class="container">
        <div class="page-title">
            <h1>{{ $news->title }}</h1>
        </div>
        <div class="article">
            <div class="article__img">
                <img src="{{ $news->getImageBig() }}" />
            </div>
            <div class="article__wrap">
                <time class="article__time" datetime="">{{ $news->created_at->format('d M y') }}</time>
                <h1 class="article__title">{{ $news->title }}</h1>
                <div class="article__txt">{!! $news->text !!}</div>
            </div>
        </div>
    </div>
@endsection
