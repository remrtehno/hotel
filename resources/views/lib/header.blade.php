<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    @include('lib.nav-links')
    <script>
        // https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_collapse_sidebar
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.querySelector("main").style.marginLeft = "250px";

        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.querySelector("main").style.marginLeft = "0";
        }
    </script>
</div>

{{-- <div class="parallax-container" ></div> --}}

<section class="first-screen" style="background: transparent" data-parallax="scroll" data-position="top" data-bleed="10"
    data-image-src="/images/main-bg.jpg">
    <header class="header">
        <div class="_container header-container">
            <div class="mobile-menu">
                <button onclick="openNav()" type="button" class="btn-burger">
                    <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.254453 1.734V0.0959995H20.3005V1.734H0.254453ZM0.254453 8.734V7.096H20.3005V8.734H0.254453ZM0.254453 15.734V14.096H20.3005V15.734H0.254453Z"
                            fill="white" />
                    </svg>
                    Меню
                </button>

            </div>

            <div class="header-logo">
                <a href="/">
                    <img src="/uploads/logo/logo.png" alt="">
                </a>
            </div>

            <div class="header-contacts">
                {!! $contact_info['phone'] !!}
                <div class="address">
                    {!! $contact_info['address'] !!}
                </div>
            </div>

        </div>
    </header>

    <div class="_container title-main-screen">
        <h1>Отель <br> «Роял Плаза»</h1>
        <div class="descr">
            Отель премиум-класса в Нефтеюганске
        </div>
    </div>

    <div class="_container book__container" style="width: 100%;">
        <div class="book" style="position: relative; ">
            <h3>Забронировать номер</h3>
            <div id="container-iframe"
                style="position: relative; min-height: 90px;   display: flex; justify-content: center; transition: all .36s; opacity: 0;">
                <div style="position: absolute; min-height: 90px;">
                    <div class="left" id="_bn_widget_">

                    </div>
                </div>
            </div>
           

            {{-- <form class="order-form" style="display: nne;">
                <label>
                    <input type="text" class="datepicker">
                    Дата заезда
                    <button class="input" type="button">
                        <input type="hidden">
                        <span>Не выбрано</span>
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.5833 2.74984H19.2499C19.493 2.74984 19.7262 2.84641 19.8981 3.01832C20.07 3.19023 20.1666 3.42339 20.1666 3.6665V18.3332C20.1666 18.5763 20.07 18.8094 19.8981 18.9814C19.7262 19.1533 19.493 19.2498 19.2499 19.2498H2.74992C2.5068 19.2498 2.27365 19.1533 2.10174 18.9814C1.92983 18.8094 1.83325 18.5763 1.83325 18.3332V3.6665C1.83325 3.42339 1.92983 3.19023 2.10174 3.01832C2.27365 2.84641 2.5068 2.74984 2.74992 2.74984H6.41659V0.916504H8.24992V2.74984H13.7499V0.916504H15.5833V2.74984ZM3.66659 8.24984V17.4165H18.3333V8.24984H3.66659ZM5.49992 11.9165H10.0833V15.5832H5.49992V11.9165Z"
                                fill="white" />
                        </svg>
                    </button>

                </label>
                <label>
                    <input type="text" class="datepicker">
                    Дата выезда
                    <button class="input" type="button">
                        <input type="hidden">
                        <span>Не выбрано</span>
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.5833 2.74984H19.2499C19.493 2.74984 19.7262 2.84641 19.8981 3.01832C20.07 3.19023 20.1666 3.42339 20.1666 3.6665V18.3332C20.1666 18.5763 20.07 18.8094 19.8981 18.9814C19.7262 19.1533 19.493 19.2498 19.2499 19.2498H2.74992C2.5068 19.2498 2.27365 19.1533 2.10174 18.9814C1.92983 18.8094 1.83325 18.5763 1.83325 18.3332V3.6665C1.83325 3.42339 1.92983 3.19023 2.10174 3.01832C2.27365 2.84641 2.5068 2.74984 2.74992 2.74984H6.41659V0.916504H8.24992V2.74984H13.7499V0.916504H15.5833V2.74984ZM3.66659 8.24984V17.4165H18.3333V8.24984H3.66659ZM5.49992 11.9165H10.0833V15.5832H5.49992V11.9165Z"
                                fill="white" />
                        </svg>
                    </button>
                </label>
                <button type="submit" class="btn find-hotel">
                    Найти номер
                </button>
            </form> --}}
            <a target="_blank" href="https://hotels-pro.ru/order/royal_plaza">
                <h5>Визовая поддержка</h5>
            </a>
        </div>
    </div>
</section>
