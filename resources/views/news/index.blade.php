@extends("main.main")



@section('content')
    <div class="inner-pages">
        <h1 class="title">Рестораны и бары</h1>
        <ul class="breadcrumbs">
            <li><a href="/">Главная</a></li>
            <li><a href="/bars">Рестораны и бары</a></li>
        </ul>
        <br>
        <br>

        <div class="container">
            <div class="page-title">
            </div>
            <p>
                Роял Плаза отличается не только комфортными номерами, но и разнообразием мест для отдыха, встреч с друзьями
                и деловых переговоров. К вашим услугам несколько кафе с международной кухней, бары с большим выбором
                напитков, сигарная комната, караоке зал, ресторан и ночной клуб.<br /><br />
                В отеле Роял Плаза у вас не возникнет вопроса, где интересно провести свободный вечер!
            </p>
            <br>

            <div class="hotels-page">
                @foreach ($news as $item)
                    <div class="hotel-wrapper">
                        <div class="img-container">
                            <div class="flexslider {{ count($item->getMediaLibrary()) === 1 ? 'hide-nav' : '' }}">
                                <ul class="slides">
                                    @foreach ($item->getMediaLibrary() as $val)
                                        <li>
                                            <a data-fancybox="gallery" href="{{ $val->getImage('big') }}">
                                                <img style="width: 100%; margin: auto; display: block;"
                                                    src="{{ $val->getImage() }}" alt="">
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="description-section">
                            <br>
                            <h3 class="title-section">
                                {!! $item->title !!}
                            </h3>
                            {{-- <div class="description">
                                {!! $item->text !!}
                            </div> --}}
                            <div class="anonce">
                                {!! $item->anonce !!}
                            </div>
                            <div class="comfort comfort-row">
                                {!! $item->meta_info !!}
                            </div>

                            <div class="notice">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.75 6.75H8.25V5.25H9.75V6.75ZM9.75 12.75H8.25V8.25H9.75V12.75ZM9 1.5C8.01509 1.5 7.03982 1.69399 6.12987 2.0709C5.21993 2.44781 4.39314 3.00026 3.6967 3.6967C2.29018 5.10322 1.5 7.01088 1.5 9C1.5 10.9891 2.29018 12.8968 3.6967 14.3033C4.39314 14.9997 5.21993 15.5522 6.12987 15.9291C7.03982 16.306 8.01509 16.5 9 16.5C10.9891 16.5 12.8968 15.7098 14.3033 14.3033C15.7098 12.8968 16.5 10.9891 16.5 9C16.5 8.01509 16.306 7.03982 15.9291 6.12987C15.5522 5.21993 14.9997 4.39314 14.3033 3.6967C13.6069 3.00026 12.7801 2.44781 11.8701 2.0709C10.9602 1.69399 9.98491 1.5 9 1.5Z"
                                        fill="#918784" />
                                </svg> <p>Режим работы: &nbsp;</p>
                                @if ($item->time)
                                    {{ $item->time }}
                                @else
                                    не указан
                                @endif
                            </div>
							<p>&nbsp;</p>
                            <div class="bottom">
                                <a href="{{ route('newsdetail', $item->slug) }}" class="orange-btn small">Подробнее</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
