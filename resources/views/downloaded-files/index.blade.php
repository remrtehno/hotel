@extends("main.main")

@section('content')
    <br>
    <br>
    <div class="container">
        <div class="page-title">
            <h1>Скачать</h1>
        </div>
        <div class="video">
            <div class="video__row">
                @foreach ($sl as $val)
                    <div class="video__item">
                        <a href="{{ $val->getFile() }}"></a>
                        <div class="video__block">
                            <video style="width: 100%;" poster="{{ $val->getImage() }}" src="{{ $val->getImage() }}"
                                frameborder="0" allowfullscreen=""></video>
                        </div>
                        <p class="video__name">{{ $val->title }}</p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
