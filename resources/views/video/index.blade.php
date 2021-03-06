@extends("main.main")

@section('content')
    <br>
    <br>
    <div class="container">
        <div class="page-title">
            <h1>Видео</h1>
        </div>
        <div class="video">
            <div class="video__row">
                @foreach ($video as $val)
                    <div class="video__item">
                        <a data-fancybox="" href="/uploads/video/{{ $val->file }}"></a>
                        <div class="video__block">
                            <video style="width: 100%;" src="/uploads/video/{{ $val->file }}" frameborder="0"
                                allowfullscreen=""></video>
                        </div>
                        <p class="video__name">{{ $val->title }}</p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
