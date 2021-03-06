<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="{{ $meta_key }}">
    <meta name="description" content="{{ $meta_desc }}">

    <title>{{ $title }}</title>
    <link rel="icon" type="image/png" href="/img/favicon.png" />

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="">
    {{-- <link href="/css/slick.css" rel="stylesheet">
        <link href="/css/slicknav.css" rel="stylesheet"> --}}
    {{-- <link href="/css/jquery.fancybox.min.css" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" /> --}}
    <link rel="stylesheet" href="/css/app.css">
	    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script>
        var width = window.innerWidth;
        var count = 0;

        function styleBnovo() {
            if (count > 50) {
                return;
            }
            if (!document.querySelector('iframe') || !document.querySelector('iframe').contentWindow.document.querySelector(
                    '#from')) {
                count++
                setTimeout(() => styleBnovo(), 1200);
                return;
            }

            document.querySelector('#container-iframe').style.opacity = 1;
            var from = document.querySelector('iframe').contentWindow.document.querySelector('#from');
            var to = document.querySelector('iframe').contentWindow.document.querySelector('#to');
            from.placeholder = 'Не выбрано';
            to.placeholder = 'Не выбрано';
            from.insertAdjacentHTML('beforeBegin',
                '<div style="position: absolute;color: white;top: 16px;margin-left: 10px;font-weight: 300;font-family: system-ui;font-size: 14px;">Дата заезда</div>'
            );
            to.insertAdjacentHTML('beforeBegin',
                '<div style="position: absolute;color: white;top: 16px;margin-left: 10px;font-weight: 300;font-family: system-ui;font-size: 14px;;">Дата выезда</div>'
            );
            document.querySelector('iframe').contentWindow.document.querySelector('.bnovo__button').innerHTML =
                "Найти номер";
            document.querySelector('iframe').contentWindow.document.head.innerHTML += (`            <style>
        .bnovo__icon {
            color: white;
            top: auto;
            opacity: .4;
            right: 23px;
            font-size: 18px;
        }
        .bnovo__button {
            width: 290px;
            height: 84px;
            font-family: "Raleway", sans-serif;
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 22px;
            display: inline-flex;
            align-items: center;
            text-align: center;
            color: inherit;
            justify-content: center;
            background: #d09870;
            box-shadow: 0 10px 28px rgb(208 152 112 / 40%), inset 0 10px 28px hsl(0deg 0% 100% / 15%);
            border-radius: 3px;
            color: white;
            border: 0;
        }

		#cookie-msg {
			bottom: 67px !important;
		}
		
        .bnovo__fields {
            padding-top:0;
            padding-bottom:0;
        }
        ${width < 992 ? `
                                                                .bnovo__field {
                                                                    text-align: center;
                                                                }
                                                                .bnovo__inputs {
                                                                    display: flex;
                                                                    flex-direction: column;
                                                                }
                                                                .bnovo__fields {
                                                                    display: flex;
                                                                    flex-direction: column;
                                                                    margin: auto;
                                                                    align-items: center;
                                                                    width: ${width};         
                                                                }

                                                            ` : ''}

        .bnovo__header {
            display: none;
        }
        .bnovo__dropdown input::placeholder {
            border: 0;
            color: white;
            outline: none;
            opacity: 0.4;
            font-size: 20px;
        }
        .bnovo__dropdown input, .bnovo__dropdown input:hover, .bnovo__dropdown input:focus, .bnovo__dropdown input:active
        .bnovo__dropdown input:visited
         {
            background: none;
            border: 0;
            color: white;
            outline: none;
            padding: 0;
        }

        .bnovo__dropdown {
            width: 290px;
            height: 84px;
            margin-bottom: 5px;
            background: hsla(0, 0%, 100%, .1);
            border: 1px solid hsla(0, 0%, 100%, .07);
            box-sizing: border-box;
            -webkit-backdrop-filter: blur(12px);
            backdrop-filter: blur(12px);
            border-radius: 3px;
            display: inline-flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 15px 23px;
            font-size: 15px;
            font-style: normal;
            font-weight: 400;
            line-height: 18px;
            letter-spacing: 0;
            text-align: left;
            padding-top: 38px;
        }

        .bnovo__service-item {
			background: rgba(255,218,74,0) !important;
			    opacity: 0.8;
		}

		.bnovo__services {
			width: 205px;
			align-items: center;
			display: inline-block;
		}

		.bnovo__container {
			text-align: center;
		}
		
		.book__container {
			margin: auto auto 100px !important;
		}
		
		.bnovo__button:hover {
		background: #C38B62;
		color:#fff;
		border-color:#C38B62;
		}
    </style>`)


        }


        // }
    </script>
</head>

<body class="loaded_hiding">
    @include("lib.header")

    <main>


        @yield("slider")
        @yield("userwrap")
        @yield("content")
    </main>

    @include("lib.footerinput")

    {{-- <div class="copyright" style="text-align: center; padding-bottom: 15px;">
        2021 ® Все права защищены.
       | Разработано в <a style="display: inline; color: black; letter-spacing: 1px;"
            href="http://steepcoder.uz/site"><u>steepcoder.uz</u></a> 
    </div> --}}

    <script src="/js/jquery.min.js"></script>
    <script src="//widget.reservationsteps.ru/js/bnovo.js"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            Bnovo_Widget.init(function() {
                Bnovo_Widget.open('_bn_widget_', {
                    type: "horizontal",
                    uid: "f5349a31-3261-48c7-aceb-3e9a01b942d1",
                    lang: "ru",
                    width: "960",
                    background: "#ffda4a",
                    bg_alpha: "0",
                    padding: "20",
                    border_radius: "4",
                    font_type: "arial",
                    font_size: "16",
                    title: "&nbsp;",
                    title_color: "#222222",
                    title_size: "18",
                    inp_color: "#222222",
                    inp_bordhover: "#3796e5",
                    inp_bordcolor: "#cccccc",
                    inp_alpha: "100",
                    btn_background: "#f8f8f8",
                    btn_background_over: "#ffffff",
                    btn_textcolor: "#222222",
                    btn_textover: "#222222",
                    btn_bordcolor: "#cccccc",
                    btn_bordhover: "#cccccc",
                    visa: "on",
                    visa_url: "https://hotels-pro.ru/order/royal_plaza",
                    dop_background: "ffda4a00",
                    dop_textcolor: "#fff",
                    dop_height: "42",
                    url: "http://royal-plaza.tmweb.ru/booking"
                });
                setTimeout(() => styleBnovo(), 1000);
            });


        })
    </script>

    <script src="/js/svg4everybody.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/parallax.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="/js/jquery.slicknav.js"></script>
    <script src="/js/bloodhound.min.js"></script>
    <script src="/js/typeahead.bundle.js"></script> --}}
    {{-- <script src="/js/scripts.js"></script> --}}



    <style>
        @media (max-width: 992px) {

            #container-iframe,
            #container-iframe iframe {
                min-height: 260px !important;
            }
        }

        #container-iframe + a {
            opacity: 0;
            visibility: hidden;
  display: block;
        }
    </style>

</body>

</html>
