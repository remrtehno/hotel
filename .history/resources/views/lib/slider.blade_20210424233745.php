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
  <div class="banner__item">
      <img src="img/1809aadd8b5554064cf10b16c7d9577a.jpg.f622b0db75b9c3beed1f3a3a4711507a.jpg" alt="Полный спектр оборудования для симуляционных центров">
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
  <div class="banner__item">
      <img src="img/slider-1340x305-ac72.jpg" alt="Полный спектр оборудования для симуляционных центров">
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
</div>
<!-- END BANNER -->