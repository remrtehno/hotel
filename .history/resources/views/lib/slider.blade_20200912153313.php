<div class="wow fadeIn" data-wow-duration="1s">
        <div class="slick-slider slider-main">
            @foreach($slider as $item)
          <div class="item">
            <picture>
              <source srcset="{{ $item->getImage()}}" type="image/webp" />
              <img src="{{ $item->getImage()}}" alt="{{ $item->anonce }}" title="{{ $item->title }}" class="img-responsive" />
            </picture>
          </div><!-- /.item -->
           @endforeach
        </div>
        <!-- /.slider-main -->
      </div>