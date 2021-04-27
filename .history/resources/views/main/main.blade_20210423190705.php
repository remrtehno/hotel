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
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slicknav.css" rel="stylesheet">
    <link href="css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="css/styles.min.css" rel="stylesheet">
    <link href="css/template170321.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style-new.css">

    <!--[if IE 8]>
    <link rel="stylesheet" type="text/css"
          href="/public/fazka/css/vc-ie8.css" media="screen">
    <![endif]-->
</head>



@include("lib.header")

<main>
    @yield("slider")




    @yield("userwrap")


    @yield("content")



</main>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="tel:+998988094963" class="footer-tel">
                    +998(98) 809-49-63
                </a>
                <!-- /.footer-tel -->
                <a href="tel:+998988094963" class="footer-tel">
                    +998 (98) 809-49-63
                </a>
                <!-- /.footer-tel -->
                <a href="tel:+998951994963" class="footer-tel">
                    +99895 199 49 63, +99898 301 49 63
                </a>
                <!-- /.footer-tel -->
                <a href="mailto:alan-tailor@indox.ru" class="footer-email">
                    alan-tailor@indox.ru
                </a>
                <!-- /.footer-email -->
            </div>
            <div class="col-md-12">
                <div class="colelem">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-google-plus"></i></a>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="copyright">

        www.alan-tailor.uz 2020 ® Все права защищены.

        | Разработано в <a style="display: inline; color: white; letter-spacing: 1px;"
            href="http://steepcoder.uz/site">steepcoder.uz</a>


    </div>
    <!-- /.copyright -->
</footer>






<script src="js/jquery.3.2.1.min.js"></script>


<script src="js/svg4everybody.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/scripts.js"></script>

</body>

</html>
