$(function() {

    /*
     *  Полифил для SVG в IE
     */

    svg4everybody();

    /*
     *  Баннер
     */

    $('.banner').slick({
        infinite: true,
        speed: 800,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: true,
        dots: true,
    });





    /*
     *  Плавный скрол к якорю
     */

    $('.js-anchor').click(function() {
        var elementClick = $(this).attr('href');
        var destination = $(elementClick).offset().top;
        $('html,body').animate({ scrollTop: destination }, 1100);
        return false;
    });

    /*
     *  Modal
     */

    $('.js-modal-show').on('click', function() {
        var currentModal = '#' + $(this).attr('data-target');
        $(currentModal).fadeIn(500);
        $('body').append('<div class="overlay" id="js-overlay"></div>');
    });

    $('.js-modal-close').on('click', function(e) {
        e.preventDefault();
        $('.js-modal').fadeOut(100);
        $('#js-overlay').remove();
    });

    $('body').on('click', '#js-overlay', function() {
        $('.js-modal').fadeOut(100);
        $('#js-overlay').remove();
    });

    /*
     *   Маска телефона
     */

    /*
     *  Загрузка файла
     */

    $('.form__file input[type=file]').change(function() {
        var formFile = $(this).parents('.form__file');
        var fileName = $(this).val().replace(/.*\\/, "");
        formFile.find('.filename').val(fileName);
        formFile.find('.file-remove').fadeIn();
    });

    $('.file-remove').click(function() {
        var formFile = $(this).parents('.form__file');
        formFile.find('.form__file input[type=file]').val('');
        formFile.find('.filename').val('');
        $(this).fadeOut();
    });

    /*
     *  Мобильное меню
     */

    $('.navbar__menu').slicknav({
        label: '',
        duration: 1000,
        prependTo: '.navbar'
    });

    /*
     *  Подробнее
     */

    $('.spec-menu__more').click(function(e) {
        e.preventDefault();
        $(this).toggleClass('up');
        $('.spec-menu__hidden').slideToggle();
    });

    $('.prod-menu__more').click(function(e) {
        e.preventDefault();
        $(this).toggleClass('up');
        $('.prod-menu__hidden').slideToggle();
    });

    /*
     *  Открытие фильтров + убираем "нулевые фильтры"
     */






    /*
     *  Плавный скрол
     */

    $('.js-anchor').click(function() {
        var elementClick = $(this).attr('href');
        var destination = $(elementClick).offset().top;
        $('html,body').animate({ scrollTop: destination }, 1100);
        return false;
    });

});