/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });




$(function () {
  // $('.btn-burger').on('click', function () {
  //   $('.menu').toggle();
  // });

  $('.js-anchor').click(function () {

    var elementClick = $(this).attr('href');
    // var destination = $(elementClick).offset().top;
    var destination = $(elementClick).length > 0
      ? $(elementClick)[0].offsetTop
      : $(elementClick);


    $('html,body').animate({ scrollTop: destination }, 1100);
    return false;
  });

  $.each($('.slick'), function (_, value) {

    $(value).slick({
      lazyLoad: 'ondemand',
      infinite: true,
      speed: 800,
      slidesToShow: $(value).data('per-slide') || 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 5000,
      arrows: true,
      dots: true,
      appendDots: $(value).data('parent-dots') ? $($(value).data('parent-dots')) : false || $(value).parent().find('.dots'),
      customPaging: function (slider, i) {
        return '<button role="button" class="slide-text-title">' + $(slider['$slides'][i]).data('title') + '</button>';
      },
      prevArrow: $(value).parent().find('.prev-btn'),
      nextArrow: $(value).parent().find('.next-btn'),
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
      ]
    });

    $(value).on('afterChange', function (event, slick, currentSlide) {

      $.each($(value).find('.dots'), function (_, val) {
        $(val).find('li').eq(currentSlide).addClass('slick-active');
      })
    });
  });






});




/* lazyload.js (c) Lorenzo Giuliani
 * MIT License (http://www.opensource.org/licenses/mit-license.html)
 *
 * expects a list of:  
 * `<img src="blank.gif" data-src="my_image.png" width="600" height="400" class="lazy">`
 */
/*
!function (window) {
  var $q = function (q, res) {
    if (document.querySelectorAll) {
      res = document.querySelectorAll(q);
    } else {
      var d = document
        , a = d.styleSheets[0] || d.createStyleSheet();
      a.addRule(q, 'f:b');
      for (var l = d.all, b = 0, c = [], f = l.length; b < f; b++)
        l[b].currentStyle.f && c.push(l[b]);

      a.removeRule(0);
      res = c;
    }
    return res;
  }
    , addEventListener = function (evt, fn) {
      window.addEventListener
        ? this.addEventListener(evt, fn, false)
        : (window.attachEvent)
          ? this.attachEvent('on' + evt, fn)
          : this['on' + evt] = fn;
    }
    , _has = function (obj, key) {
      return Object.prototype.hasOwnProperty.call(obj, key);
    }
    ;

  function loadImage(el, fn) {
    var img = new Image()
      , src = el.getAttribute('data-src');
    img.onload = function () {
      if (!!el.parent)
        el.parent.replaceChild(img, el)
      else
        el.src = src;

      fn ? fn() : null;
    }
    img.src = src;
  }

  function elementInViewport(el) {
    var rect = el.getBoundingClientRect()

    return (
      rect.top >= 0
      && rect.left >= 0
      && rect.top <= (window.innerHeight || document.documentElement.clientHeight)
    )
  }

  var images = new Array()
    , query = $q('img.lazy')
    , processScroll = function () {
      for (var i = 0; i < images.length; i++) {
        if (elementInViewport(images[i])) {
          loadImage(images[i], function () {
            images.splice(i, i);
          });
        }
      };
    }
    ;
  // Array.prototype.slice.call is not callable under our lovely IE8 
  for (var i = 0; i < query.length; i++) {
    images.push(query[i]);
  };

  processScroll();
  addEventListener('scroll', processScroll);

}(this);


*/