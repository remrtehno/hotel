<header>
    <div class="container">
        <!-- BEGIN HEADERBAR-->
        <div class="headerbar">
            <div class="headerbar__row">
                <div class="headerbar__logo">
                    <a href="/">
                        <img src="/uploads/logo/logo.png" alt="">
                        <p>«U-Robotics» <br> Симуляционные центры «под ключ»</p>
                    </a>
                </div>
                <div class="headerbar__info">
                    <style>
                        .headerbar__info p {
                            font-size: 17px;
                        }

                    </style>
                    {!! $contact_info['phone'] !!}
                    <p style="margin-bottom: 15px;"></p>

                    <p>Работаем по будням с 9:00 до 17:00</p>
                </div>
                <div class="headerbar__request">
                    <a><span>Оставьте заявку</span></a>

                    <p>Заявки принимаем круглосуточно</p>
                </div>
                <script>
                    window.products = '{{ $products_service }}';

                </script>
                <form class="headerbar__search" onsubmit="
                   
                    var query = this.elements.search.value;
                    window.location.href = '{{ route('search', ['slug' => '']) }}/' + query ;
                    return false;
                ">
                    <input class="typeahead" type="text" placeholder="Поиск" name="search" required="">
                    <button type="submit">
                        <svg>
                            <use xlink:href="/img/sprite.svg#search"></use>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
        <!-- END HEADERBAR -->
        <!-- BEGIN NAVBAR -->
        <nav class="navbar wr">
            <div class="slicknav_menu"><a href="#" aria-haspopup="true" role="button" tabindex="0"
                    class="slicknav_btn slicknav_collapsed"><span class="slicknav_menutxt"></span><span
                        class="slicknav_icon slicknav_no-text"><span class="slicknav_icon-bar"></span><span
                            class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span></span></a>
                <ul class="slicknav_nav slicknav_hidden" aria-hidden="true" role="menu" style="display: none;">
                    <li><a href="/" class="js-anchor">Главная</a></li>
                    <li><a href="{{ route('products') }}" role="menuitem" tabindex="-1">Продукция</a></li>
                    <li><a href="#skill" class="js-anchor">Навыки</a></li>
                    <li><a href="{{ route('about') }}">О компании</a></li>
                    <li><a href="{{ route('news') }}">Новости</a></li>
                    <li><a href="{{ route('contact') }}">Контакты</a></li>
                </ul>
            </div>
            <ul class="navbar__menu">
                <li><a href="/" class="js-anchor">Главная</a></li>
                <li><a href="{{ route('products') }}">Продукция</a></li>
                <li><a href="#skill" class="js-anchor">Навыки</a></li>
                <li><a href="{{ route('about') }}">О компании</a></li>
                <li><a href="{{ route('news') }}">Новости</a></li>
                <li><a href="{{ route('contact') }}">Контакты</a></li>
            </ul>
        </nav>
        <!-- END NAVBAR  -->
    </div>
</header>
