<header>
  <div class="container">
      <!-- BEGIN HEADERBAR-->
      <div class="headerbar">
          <div class="headerbar__row">
              <div class="headerbar__logo">
                  <a href="">
                      <img src="/uploads/logo/logo.png" alt="">
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
          </div>
      </div>
      <!-- END HEADERBAR -->
      <!-- BEGIN NAVBAR -->
      <nav class="navbar wr">
          <div class="slicknav_menu"><a href="#" aria-haspopup="true" role="button" tabindex="0" class="slicknav_btn slicknav_collapsed"><span class="slicknav_menutxt"></span><span class="slicknav_icon slicknav_no-text"><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span></span></a>
              <ul class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu" style="display: none;">
                  <li><a href="{{ route('products') }}" role="menuitem" tabindex="-1">Продукция</a></li>
                  <li><a href="#skill" class="js-anchor" >Навыки</a></li>
                  <li><a href="{{ route('about') }}">О компании</a></li>
                  <li><a href="novosti.html" role="menuitem" tabindex="-1">Новости</a></li>
                  <li><a href="kontakty.html" role="menuitem" tabindex="-1">Контакты</a></li>
              </ul>
          </div>
          <ul class="navbar__menu">
              <li><a href="{{ route('products') }}">Продукция</a></li>
              <li><a href="#skill" class="js-anchor">Навыки</a></li>
              <li><a href="{{ route('about') }}">О компании</a></li>
              <li><a href="{{ route('new') }}">Новости</a></li>
              <li><a href="kontakty.html">Контакты</a></li>
          </ul>
      </nav>
      <!-- END NAVBAR  -->
  </div>
</header>
