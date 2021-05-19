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

<section class="inner-header">
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
                    <img src="/img/ft-logo.png" alt="">
                </a>
            </div>

            <div class="header-contacts">
                <a class="inner-tel" href="tel:+7 (3463) 25-00-00">+7 (3463) 25-00-00</a>
                <a class="btn-call" data-toggle="modal" data-target="#exampleModal" href="">Заказать звонок</a>
            </div>

        </div>
    </header>
</section>
