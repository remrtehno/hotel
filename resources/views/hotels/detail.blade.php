@extends("main.main")

@section('content')
<style>
    .inner-header {
        background-image: url(/images/BG/hotels-bg.png), url(/images/inner-nd-bg.png);
    }

</style>
    <div class="hotel-detail-page">
        <div class="inner-pages">
            <h1 class="title">{{ $product->title }}</h1>
            <ul class="breadcrumbs">
                <li><a href="/">Главная</a></li>
                <li><a href="/hotels">Номера</a></li>
                <li><a href="">{{ $product->title }}</a></li>
            </ul>
            <br>

            <br>

            <div class="container">
                <div class="product">
                    <div class="description">
                        <h3>Описание</h3>
                        {!! $product->description !!}

                        <div class="product-container">
                            <div style="font-family: Raleway;
                            font-size: 18px;
                            font-style: normal;
                            font-weight: 400;
                            line-height: 32px;
                            letter-spacing: 0em;
                            text-align: left;
                            ">
                            @if ($product->area)
                            <svg style="margin-right: 5px;" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="20" height="20" fill="url(#pattern0)"/>
                                <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0" transform="scale(0.05)"/>
                                </pattern>
                                <image id="image0" width="20" height="20" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTExIDc5LjE1ODMyNSwgMjAxNS8wOS8xMC0wMToxMDoyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkEyRDQxNTk4OUQ0MDExRUJBNTY4QTYyMTQyNjg3NkVEIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkEyRDQxNTk5OUQ0MDExRUJBNTY4QTYyMTQyNjg3NkVEIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QTJENDE1OTY5RDQwMTFFQkE1NjhBNjIxNDI2ODc2RUQiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QTJENDE1OTc5RDQwMTFFQkE1NjhBNjIxNDI2ODc2RUQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4nbeRqAAABYElEQVR42qSUu0pDQRCGN2GxMEZBsLGIllrZ2WgatQs2duoDaDSglj6FgsbLA9gIdkcEURDSWqiVpZjCwgheSKGF+g2McFhzOJvNwM/P7AlfZmdnN3NzsN5rjNlHk6hgwuId1VDZKmzBdBZSVElYViuTGBpb2noMod0ebvRhr6honQ9S7TzKxpZ/0IXsgj/8TINbJ19O+N0cyqO2gU2Ui+Uv6AjdUV3DZ/su8NvJu9A5sFPffmadPKP+rC7bjOjtSiiwR/0MzcbWq0BXnQPs9wFeqV+zzQiPQ3b/KsUXsTp+kgacQqPAdiTB97CKU6kM8DTq1tNPPhQAMnP3zppAZL2qS1Gsx820CluGVlrSOysxkDAV/8Ym6WqtYcPoK60g6wEbwbYTPudCKnxCl2i8xSU4bhtI/96wGd/BFmBdH9YC27OB72Fe/cHqSzuh3mnUBLipSRENBoI+BEZ7Kr8CDADJwmFClPA+AwAAAABJRU5ErkJggg=="/>
                                </defs>
                                </svg> 
                                 {!! $product->area !!}
                            @endif
                        </div>
                          
                          
                          <!--
=======
                                    font-size: 18px;
                                    font-style: normal;
                                    font-weight: 400;
                                    line-height: 32px;
                                    letter-spacing: 0em;
                                    text-align: left;
                                    margin-top: -15px;
                                    ">
>>>>>>> ec4436cf0461537f1327dfdf4054f892a78fdfa1


=======
                                        font-size: 18px;
                                        font-style: normal;
                                        font-weight: 400;
                                        line-height: 32px;
                                        letter-spacing: 0em;
                                        text-align: left;
                                        margin-top: -15px;
                                        ">
>>>>>>> 905a82691572616debbc0d8382ba53c1a6a20197
                                @if ($product->area)
                                    <svg style="margin-right: 5px;" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <rect width="20" height="20" fill="url(#pattern0)" />
                                        <defs>
                                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                                height="1">
                                                <use xlink:href="#image0" transform="scale(0.05)" />
                                            </pattern>
                                            <image id="image0" width="20" height="20"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTExIDc5LjE1ODMyNSwgMjAxNS8wOS8xMC0wMToxMDoyMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkEyRDQxNTk4OUQ0MDExRUJBNTY4QTYyMTQyNjg3NkVEIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkEyRDQxNTk5OUQ0MDExRUJBNTY4QTYyMTQyNjg3NkVEIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6QTJENDE1OTY5RDQwMTFFQkE1NjhBNjIxNDI2ODc2RUQiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6QTJENDE1OTc5RDQwMTFFQkE1NjhBNjIxNDI2ODc2RUQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4nbeRqAAABYElEQVR42qSUu0pDQRCGN2GxMEZBsLGIllrZ2WgatQs2duoDaDSglj6FgsbLA9gIdkcEURDSWqiVpZjCwgheSKGF+g2McFhzOJvNwM/P7AlfZmdnN3NzsN5rjNlHk6hgwuId1VDZKmzBdBZSVElYViuTGBpb2noMod0ebvRhr6honQ9S7TzKxpZ/0IXsgj/8TINbJ19O+N0cyqO2gU2Ui+Uv6AjdUV3DZ/su8NvJu9A5sFPffmadPKP+rC7bjOjtSiiwR/0MzcbWq0BXnQPs9wFeqV+zzQiPQ3b/KsUXsTp+kgacQqPAdiTB97CKU6kM8DTq1tNPPhQAMnP3zppAZL2qS1Gsx820CluGVlrSOysxkDAV/8Ym6WqtYcPoK60g6wEbwbYTPudCKnxCl2i8xSU4bhtI/96wGd/BFmBdH9YC27OB72Fe/cHqSzuh3mnUBLipSRENBoI+BEZ7Kr8CDADJwmFClPA+AwAAAABJRU5ErkJggg==" />
                                        </defs>
                                    </svg>
                                    {!! $product->area !!} -->
                                @endif
                            </div>

                            <p></p>
                            <h3>Удобства номера</h3>

                            <div class="comfort">
                                {!! $product->comfort !!}
                            </div>

                            @include('hotels.notice')
                            <div style="border: 1px solid #F1F1F1; margin-bottom: 12px;"></div>

                            <h3>Стоимость номера</h3>
                            <div class="bottom">
                                <div class="cost">
                                    {!! $product->cost !!}
                                </div>
                                <a href="#" class="orange-btn big">Забронировать</a>
                            </div>
                        </div>
                    
                    <div class="img-container">
                        <div class="flexslider {{ count($product->getMediaLibrary()) === 0 ? 'hide-nav' : '' }}">
                            <ul class="slides">

                                @foreach ($product->getMediaLibrary() as $key => $val)
                                    <li>
                                        <a data-fancybox="gallery" href="{{ $val->getImage('big') }}">
                                            <img {{ $key ? 'loading=lazy' : null }}
                                                style="width: 100%; margin: auto; display: block;"
                                                src="{{ $val->getImage('small') }}" alt="">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>



            </div>
        </div>



        <div class="container">
            @include('_some-parts.send-email')
        </div>

    </div>
@endsection
