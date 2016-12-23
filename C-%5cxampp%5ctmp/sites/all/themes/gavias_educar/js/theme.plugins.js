(function ($) {
   "use strict";

   function ConfigOWL(){
      $("div.owl-carousel:not(.manual), .field-name-field-post-gallery .field-items, .field-name-field-gallery-images .field-items").each(function() {
         var slider = $(this);
         var defaults = {
            items : 1,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [980, 2],
            itemsTablet: [768, 1],
            itemsTabletSmall: false,
            itemsMobile : [479,1],
            singleItem : true,
            autoPlay : false,
            pagination : false,
            navigation : true,
            //transitionStyle : "slide",
            autoHeight : true,
            afterAction : function(){
               var current = this.currentItem;
               slider.find(".owl-item")
                 .removeClass("active")
                 .eq(current)
                 .addClass("active");
            },
         }
         var config = $.extend({}, defaults, slider.data("plugin-options"));

         // Initialize Slider
         slider.imagesLoaded(function(){
            slider.owlCarousel(config);
         })
      });
   }   

  jQuery(document).ready(function () {
    ConfigOWL();
   
    $("a[data-rel^='prettyPhoto[g_gal]']").prettyPhoto({
        animation_speed:'normal',
        theme:'light_square',
        social_tools: false,
    });

    if ($(window).width() > 780) {

      if ( $.fn.jpreLoader ) {
        var $preloader = $( '.js-preloader' );
        $preloader.jpreLoader({
          autoClose: true,
        }, function() {
          $preloader.addClass( 'preloader-done' );
          $( 'body' ).trigger( 'preloader-done' );
          $( window ).trigger( 'resize' );
        });
      }
      new WOW().init();
    }else{
      $('body').removeClass('js-preloader');
    }

     if ( $.fn.isotope ) {
      $( '.isotope-items' ).each(function() {

        var $el = $( this ),
            $filter = $( '.portfolio-filter a' ),
            $loop =  $( this );

        $loop.isotope();

        $loop.imagesLoaded(function() {
          $loop.isotope( 'layout' );
        });

        if ( $filter.length > 0 ) {

          $filter.on( 'click', function( e ) {
            e.preventDefault();
            var $a = $(this);
            $filter.removeClass( 'active' );
            $a.addClass( 'active' );
            $loop.isotope({ filter: $a.data( 'filter' ) });
          });
        };
      });
    };

  /*----------- Masonry -----------------------------------*/
    var $container = $('.post-masonry-style');
    $container.imagesLoaded( function(){
        $container.masonry({
            itemSelector : '.item-masory',
            gutterWidth: 0,
            columnWidth: 1,
        }); 
    });

  /*----------- Animation Progress Bars --------------------*/

  $("[data-progress-animation]").each(function() {
    var $this = $(this);
    $this.appear(function() {
      var delay = ($this.attr("data-appear-animation-delay") ? $this.attr("data-appear-animation-delay") : 1);
      if(delay > 1) $this.css("animation-delay", delay + "ms");
      setTimeout(function() { $this.animate({width: $this.attr("data-progress-animation")}, 800);}, delay);
    }, {accX: 0, accY: -50});
  });
  
  /*-------------Milestone Counter----------*/
  
  jQuery('.milestone-block').each(function() {
    jQuery(this).appear(function() {
      var $endNum = parseInt(jQuery(this).find('.milestone-number').text());
      jQuery(this).find('.milestone-number').countTo({
        from: 0,
        to: $endNum,
        speed: 4000,
        refreshInterval: 60,
      });
    },{accX: 0, accY: 0});
  });
  
  /*----------------------------------------------------*/
  /*  Pie Charts
  /*----------------------------------------------------*/
  
  var pieChartClass = 'pieChart',
        pieChartLoadedClass = 'pie-chart-loaded';
    
  function initPieCharts() {
    var chart = $('.' + pieChartClass);
    chart.each(function() {
      $(this).appear(function() {
        var $this = $(this),
          chartBarColor = ($this.data('bar-color')) ? $this.data('bar-color') : "#F54F36",
          chartBarWidth = ($this.data('bar-width')) ? ($this.data('bar-width')) : 150
        if( !$this.hasClass(pieChartLoadedClass) ) {
          $this.easyPieChart({
            animate: 2000,
            size: chartBarWidth,
            lineWidth: 2,
            scaleColor: false,
            trackColor: "#eee",
            barColor: chartBarColor,
          }).addClass(pieChartLoadedClass);
        }
      });
    });
  }
  initPieCharts();

  

  $('.gavias-skins-panel .control-panel').click(function(){
        if($(this).parent().hasClass('active')){
            $(this).parent().removeClass('active');
        }else $(this).parent().addClass('active');
    });

    $('.gavias-skins-panel .layout').click(function(){
        $('body').removeClass('wide-layout').removeClass('boxed');
        $('body').addClass($(this).data('layout'));
        $('.gavias-skins-panel .layout').removeClass('active');
        $(this).addClass('active');
        var $container = $('.post-masonry-style');
        $container.imagesLoaded( function(){
            $container.masonry({
                itemSelector : '.item-masory',
                gutterWidth: 0,
                columnWidth: 1,
            }); 
        });
    });

    $('.gavias-skins-panel .item-color').click(function(){
        var skin = $(this).data('skin');
        if(skin=='default') skin = "";
        else skin = '/skins/' + skin; 
        $('head').append('<link type="text/css" rel="stylesheet" href="' + gavias_dir_theme + '/css' + skin  + '/bootstrap.css" >');
        $('head').append('<link type="text/css" rel="stylesheet" href="'+ gavias_dir_theme + '/css' + skin  + '/template.css" >');
        $('.gavias-skins-panel .item-color').removeClass('active');
        $(this).addClass('active');
    });

  // ============================================================================
  // Fixed top Menu Bar
  // ============================================================================

    function init_fixed_topbar(){
       var offset = 5;
       var $top_menu = $('#header.gv-fixonscroll');
       if(!$top_menu.length) return;
       var top_menu_offset = $top_menu.offset();

       $(window).scroll(function () {
          if ($(window).scrollTop() > top_menu_offset.top + offset) {
             $top_menu.addClass('gv-fixed');
             $('.sticky-wrapper').css('height', '78px');
          } else {
             $top_menu.removeClass('gv-fixed');
             $('.sticky-wrapper').css('height', 'auto');
          }
        });

    }

    init_fixed_topbar();

    /*============= Search ==============================*/
    $('.gavias-search-form .search-icon').click(function(){
      if($(this).parent().hasClass('open')){
          $(this).parent().removeClass('open');
       }else{
        $(this).parent().addClass('open');
       }   
    })
});

   


})(jQuery);   