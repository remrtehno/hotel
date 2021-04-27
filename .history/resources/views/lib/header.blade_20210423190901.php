<header>
  <div class="container">
      <!-- BEGIN HEADERBAR-->
      <div class="headerbar">
          <div class="headerbar__row">
              <div class="headerbar__logo">
                  <a href="">
                      <img src="img/logo.jpg" alt="">
                      <p>«U-Robotics» <br> Симуляционные центры «под ключ»</p>
                  </a>
              </div>
              <div class="headerbar__info">
                  <a class="headerbar__tel" href="tel:74959882612">+7 (495) 988-26-12</a>
                  <p>Работаем по будням с 9:00 до 17:00</p>
              </div>
              <div class="headerbar__request">
                  <a class="js-modal-show" data-target="js-request"><span>Оставить заявку</span></a>

                  <p>Заявки принимаем круглосуточно</p>
              </div>
              <!-- <form class="headerbar__search" action="rezultaty-poiska.html">
    <input type="text" name="search" required="">
    <button type="submit">
      <svg>
        <use xlink:href="img/sprite.svg#search"></use>
      </svg>
    </button>
  </form> -->
          </div>
      </div>
      <!-- END HEADERBAR -->
      <!-- BEGIN NAVBAR -->
      <nav class="navbar wr">
          <div class="slicknav_menu"><a href="#" aria-haspopup="true" role="button" tabindex="0" class="slicknav_btn slicknav_collapsed"><span class="slicknav_menutxt"></span><span class="slicknav_icon slicknav_no-text"><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span></span></a>
              <ul class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu" style="display: none;">
                  <li><a href="produkciya.html" role="menuitem" tabindex="-1">Продукция</a></li>
                  <li><a href="navyki.html" role="menuitem" tabindex="-1">Навыки</a></li>
                  <li><a href="specialnosti.html" role="menuitem" tabindex="-1">Специальности</a></li>
                  <li><a href="o-kompanii.html" role="menuitem" tabindex="-1">О компании</a></li>
                  <li><a href="novosti.html" role="menuitem" tabindex="-1">Новости</a></li>
                  <li><a href="kontakty.html" role="menuitem" tabindex="-1">Контакты</a></li>
              </ul>
          </div>
          <ul class="navbar__menu">
              <li><a href="produkciya.html">Продукция</a></li>
              <li><a href="navyki.html">Навыки</a></li>
              <li><a href="specialnosti.html">Специальности</a></li>
              <li><a href="o-kompanii.html">О компании</a></li>
              <li><a href="novosti.html">Новости</a></li>
              <li><a href="kontakty.html">Контакты</a></li>
          </ul>
      </nav>
      <!-- END NAVBAR  -->
  </div>
</header>





<header>
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <div class="logo wow bounceInDown" data-wow-duration="1.15s">
                <a href="/">
                    <picture>

                    <source srcset="/uploads/logo/logo.png" type="image/webp" />
                    <img src="/uploads/logo/logo.png" class="img-responsive" alt="">
                 </picture>
                </a>
              </div>
              <!-- /.logo -->
            </div>
            <!-- /.col-md-2 -->
            <div class="col-md-6">
              <div
                class="top-bar-text wow bounceInDown"
                data-wow-delay="1s"
                data-wow-duration="1.15s"
              >
                Ты в норме, пока в униформе
              </div>
              <!-- /.top-bar-text -->
            </div>
            <!-- /.col-md-6 -->
            <div class="col-md-4">
              <div class="top-bar-contacts wow bounceInRight">
                <a href="https://t.me/:+998988094963" class="top-bar-tel">
                  <i class="fab fa-telegram-plane"></i>
                  +998(98) 809 49 63
                </a>
                <a href="tel:+998951994963" class="top-bar-tel">
                  <i class="fas fa-phone-square-alt"></i>
                  +998(95) 199-49-63
                </a>
                <span class="small-text">с 9:00 до 18:00 Пн - Сб</span>
                <!-- /.small-text -->
                <a href="mailto:alan-tailor@indox.ru">
                  <i class="far fa-envelope"></i>
                  alan-tailor@indox.ru
                </a>
              </div>
              <!-- /.top-bar-contacts -->
            </div>
            <!-- /.col-md-4 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.top-bar -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="navbar navbar-default navigation">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button
                  type="button"
                  class="navbar-toggle collapsed"
                  data-toggle="collapse"
                  data-target="#bs-example-navbar-collapse-1"
                  aria-expanded="false"
                >
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div
                class="collapse navbar-collapse"
                id="bs-example-navbar-collapse-1"
              >
                <ul class="nav navbar-nav">
                  <li>
                    <a href="/">
                      Главная
                      <span class="sr-only">(current)</span>
                    </a>
                  </li>

                  <li><a href="{{ route('catalog') }}">Каталог</a></li>
                  <li><a href="{{ route('services') }}">Услуги</a></li>
                  <li><a href="{{ route('stocks') }}">Акции</a></li>
                  <li><a href="{{ route('about') }}">О нас</a></li>
                  <li><a href="{{ route('contact') }}">Контакты</a></li>
                </ul>
              </div>
              <!-- /.navbar-collapse -->
            </nav>
            <div class="open-hours">
              <i class="fas fa-clock"></i>
              Прием заказов: 9:00 – 18:00 без выходных
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </header>
