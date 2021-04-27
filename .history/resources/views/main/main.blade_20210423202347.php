<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="keywords" content="{{ $meta_key }}">
        <meta name="description" content="{{ $meta_desc }}">


        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300&display=swap"
            rel="stylesheet">
        <link rel="icon" type="image/png" href="">
        <link href="/css/slick.css" rel="stylesheet">
        <link href="/css/slicknav.css" rel="stylesheet">
        <link href="/css/jquery.fancybox.min.css" rel="stylesheet">
        <link href="/css/styles.min.css" rel="stylesheet">
        <link href="/css/template170321.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style-new.css">

        <!--[if IE 8]>
        <link rel="stylesheet" type="text/css"
            href="/public/fazka/css/vc-ie8.css" media="screen">
        <![endif]-->
    </head>

    <body>
        @include("lib.header")

        <main>
            @yield("slider")
            @yield("userwrap")
            @yield("content")
        </main>

        @include("lib.footerinput")

        <div class="copyright" style="text-align: center; padding-bottom: 15px;">
            2021 ® Все права защищены.
            | Разработано в <a style="display: inline; color: black; letter-spacing: 1px;"
                href="http://steepcoder.uz/site"><u>steepcoder.uz</u></a>
        </div>

        <script src="js/jquery.3.2.1.min.js"></script>
        <script src="js/svg4everybody.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/scripts.js"></script>

    </body>
</html>
