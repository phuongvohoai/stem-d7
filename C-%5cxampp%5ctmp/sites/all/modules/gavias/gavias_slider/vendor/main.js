/*
 * debouncedresize: special jQuery event that happens once after a window resize
 *
 * latest version and complete README available on Github:
 * https://github.com/louisremi/jquery-smartresize
 *
 * Copyright 2012 @louis_remi
 * Licensed under the MIT license.
 *
 * This saved you an hour of work?
 * Send me music http://www.amazon.co.uk/wishlist/HNTU0468LQON
 */
(function ($) {
  var $event = $.event,
    $special, resizeTimeout;
    $special = $event.special.debouncedresize = {
      setup: function () {
              $(this).on("resize", $special.handler);
      },
      teardown: function () {
              $(this).off("resize", $special.handler);
      },
      handler: function (event, execAsap) {
              // Save the context
              var context = this,
                      args = arguments,
                      dispatch = function () {
                              // set correct event type
                              event.type = "debouncedresize";
                              $event.dispatch.apply(context, args);
                      };

              if (resizeTimeout) {
                      clearTimeout(resizeTimeout);
              }

              execAsap ? dispatch() : resizeTimeout = setTimeout(dispatch, $special.threshold);
      },
    threshold: 150
  };
})(jQuery);


(function($) {
   'use strict';
    function init_gavias_slider() {
      $('.gavias-slider').each(function() {
       var $slider_wrapper = $(this),
         $pause = $slider_wrapper.attr('data-pause'),
         $first_el = $slider_wrapper.attr('data-first'),
         $speed = $slider_wrapper.attr('data-speed'),
         $animation = $slider_wrapper.attr('data-animation'),
         $height = $slider_wrapper.attr('data-height'),
         $fullHeight = $slider_wrapper.attr('data-fullheight'),
         $header_height = 0,
         gavias_height = 0,
         adminbar = 0;

        var swiper_main = $slider_wrapper.swiper({ 
          mode: 'horizontal',
          loop: true,
          grabCursor: true,
          useCSS3Transforms: true,
          mousewheelControl: false,
          freeModeFluid: false,
          speed: 700,
          autoplay: $pause,
          progress: true,
          autoplayDisableOnInteraction: false,
          pagination: '.swiper-pagination',
          paginationClickable: true,
         
          slideActiveClass: 'slide-active',
        });

        $('.swiper-button-prev').on('click', function(e){
            e.preventDefault()
            swiper_main.swipePrev()
          })
          $('.swiper-button-next').on('click', function(e){
            e.preventDefault()
            swiper_main.swipeNext()
          })
        
      var animationDimensions = function() {
         gavias_slider_resposnive($slider_wrapper);
         gavias_slider_opacity($height);
        if ($fullHeight === 'true') {
            gavias_height = $(window).height() - $header_height - adminbar;
        } else {
            gavias_height = $height;
        }
       }

       $(window).load(animationDimensions());
        $(window).on("debouncedresize", function(event) {
           setTimeout(function() {
               animationDimensions();
           }, 50);
        });

        gavias_slider_opacity($height);

        $(window).scroll(function(){
          gavias_slider_opacity($height);
        });
    })   
   }

   function gavias_slider_opacity(height){
     $('.gavias-opacity').each(function () {
        var divs = $(this); 
        var $scrollTop = $(window).scrollTop();
        var percent = $scrollTop / (height - 100);
        divs.css({
          'opacity': 1 - percent,
          'z-index': 999
        });
      });
   }

   function gavias_slider_resposnive(el) {
     "use strict";
       var $this = el,
         $items = $this.find('.swiper-slide'),
         $height = $this.attr('data-height'),
         $fullHeight = $this.attr('data-fullheight'),
         $skip_header_fix = 0,
         $header_height = 0;

       var $window_height = $(window).outerHeight();

       if ($(window).width() < 780) {

         $window_height = 500;

       } else if ($fullHeight == 'true') {

         $window_height = $window_height - $header_height;

       } else {

         $window_height = $height;

       }

       $items.each(function(){
          $(this).css('height', $window_height);
       });

       $this.find('.swiper-slide').each(function() {
         var $this = $(this),
           $content = $this.find('.tp-caption');

         if ($this.hasClass('left_center') || $this.hasClass('center_center') || $this.hasClass('right_center')) {
           var $this_height_half = $content.outerHeight() / 2;
           if ($content.outerHeight() < $window_height) {
             var $window_half = $window_height / 2;
             $content.css('marginTop', ($window_half - $this_height_half));
           }
         }

         if ($this.hasClass('left_bottom') || $this.hasClass('center_bottom') || $this.hasClass('right_bottom')) {
           if ($content.outerHeight() < $window_height) {
             var $distance_from_top = $window_height - $content.outerHeight() - 90;
             $content.css('marginTop', ($distance_from_top));
           }
         }
       });

       var header_padding_fix = 0;
       header_padding_fix = parseInt($('#mk-header').attr('data-sticky-height'));

       if ($('.mk-nav-responsive-link').css('display') != 'none') {
         $skip_header_fix += parseInt($('#mk-header').attr('data-height'));
         header_padding_fix = 0;
       }

       var skip = $window_height - header_padding_fix + $skip_header_fix;

       $this.find('.edge-skip-slider').bind("click", function(e) {
         $("html, body").stop().animate({ scrollTop: skip }, 1000, "easeInOutExpo");
         e.preventDefault();
       });

       $this.find('.edge-slider-loading').fadeOut();
   }

  $(document).ready(function(){
      $(window).load(function() {
        init_gavias_slider();
      });  
  });

})(jQuery);
