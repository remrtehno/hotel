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


      <!-- BEGIN BANNER-->
<div class="banner slider">
  @foreach($slider as $item)
  <div class="banner__item">
      <img src="{{ $item->getImage()}}">
      <div class="banner__caption">
          <div class="container">
              <p class="banner__txt">Полный спектр оборудования для симуляционных центров</p>
              <a href="produkciya.html" tabindex="0">
                  <span>Каталог продукции</span>
                  <svg><use xlink:href="img/sprite.svg#arrow_white"></use></svg>
              </a>
          </div>
      </div>
  </div>
  @endforeach
</div>
<!-- END BANNER -->