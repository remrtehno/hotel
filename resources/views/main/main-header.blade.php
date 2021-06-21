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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

</head>

<body>
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
    <script src="/js/svg4everybody.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/parallax.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="/js/jquery.slicknav.js"></script>
    <script src="/js/bloodhound.min.js"></script>
    <script src="/js/typeahead.bundle.js"></script> --}}
    {{-- <script src="/js/scripts.js"></script> --}}

</body>

</html>
