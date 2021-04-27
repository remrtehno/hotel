<!-- BEGIN BANNER-->
<div class="banner slider">
    @foreach ($slider as $item)
        <div class="banner__item">
            <img src="{{ $item->getImage() }}">
            <div class="banner__caption">
                <div class="container">
                    <p class="banner__txt">{{ $item->anonce }}</p>
                    <a href="{{ route('products') }}" tabindex="0">
                        <span>Каталог продукции</span>
                        <svg>
                            <use xlink:href="img/sprite.svg#arrow_white"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
<!-- END BANNER -->
