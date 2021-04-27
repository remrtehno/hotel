@extends("main.main")

@section('content')
    <div class="container">
        <div class="page-title">
            <h1>О КОМПАНИИ</h1>
        </div>
        <div class="about-page">
            @foreach ($about as $item)
                {!! $item->content !!}
            @endforeach
        </div>
    </div>
@endsection
