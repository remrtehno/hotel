@extends("main.main")



@section('content')
    <br>
    <br>
    <div class="container">
        <div class="page-title">
            <h1>Новинки медицинского симуляционного оборудования</h1>
        </div>
        <div class="news">
            <div class="news__row">
                @foreach ($news as $item)
                    <a class="news__item" href="{{ route('newsdetail', ['slug' => $item->slug]) }}">
                        <div class="news__img">
                            <img src="{{ $item->getImage() }}" alt="РеспиСим - новая версия программного обеспечения">
                        </div>
                        <div class="news__desc">
                            <h3>{{ $item->title }}</h3>
                            <p>{!! str_limit($item->anonce, 300) !!}</p>
                            <time datetime="">{{ $item->created_at->format('M d Y') }}08&nbsp;апреля&nbsp;2021 </time>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
