$(function () {

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



  $('.slick-partners').slick({
    infinite: true,
    speed: 800,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });




  /*
   *  Плавный скрол к якорю
   */

  $('.js-anchor').click(function () {
    var elementClick = $(this).attr('href');
    var destination = $(elementClick).offset().top;
    $('html,body').animate({ scrollTop: destination }, 1100);
    return false;
  });

  /*
   *  Modal
   */

  $('.js-modal-show').on('click', function () {
    var currentModal = '#' + $(this).attr('data-target');
    $(currentModal).fadeIn(500);
    $('body').append('<div class="overlay" id="js-overlay"></div>');
  });

  $('.js-modal-close').on('click', function (e) {
    e.preventDefault();
    $('.js-modal').fadeOut(100);
    $('#js-overlay').remove();
  });

  $('body').on('click', '#js-overlay', function () {
    $('.js-modal').fadeOut(100);
    $('#js-overlay').remove();
  });

  /*
   *   Маска телефона
   */

  /*
   *  Загрузка файла
   */

  $('.form__file input[type=file]').change(function () {
    var formFile = $(this).parents('.form__file');
    var fileName = $(this).val().replace(/.*\\/, "");
    formFile.find('.filename').val(fileName);
    formFile.find('.file-remove').fadeIn();
  });

  $('.file-remove').click(function () {
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

  $('.spec-menu__more').click(function (e) {
    e.preventDefault();
    $(this).toggleClass('up');
    $('.spec-menu__hidden').slideToggle();
  });

  $('.prod-menu__more').click(function (e) {
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

  $('.js-anchor').click(function () {
    var elementClick = $(this).attr('href');
    var destination = $(elementClick).offset().top;
    $('html,body').animate({ scrollTop: destination }, 1100);
    return false;
  });


  var statesStore = products.replace(/\[|\]|,/g, '').split('&quot;');


  var substringMatcher = function (strs) {
    return function findMatches(q, cb) {
      var matches, substringRegex;

      // an array that will be populated with substring matches
      matches = [];

      // regex used to determine if a string contains the substring `q`
      substrRegex = new RegExp(q, 'i');

      // iterate through the pool of strings and for any string that
      // contains the substring `q`, add it to the `matches` array
      $.each(strs, function (i, str) {
        if (substrRegex.test(str)) {
          matches.push(str);
        }
      });

      cb(matches);
    };
  };


  var states = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.whitespace,
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    // `states` is an array of state names defined in "The Basics"
    local: statesStore
  });


  $('.typeahead').typeahead({
    hint: true,
    highlight: true,
    minLength: 1
  },
    {
      name: 'states',
      source: states
    });

});