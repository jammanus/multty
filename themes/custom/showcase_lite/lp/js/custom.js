// Custom Scripts for Primal Template //

jQuery(function($) {
    "use strict";


        // get the value of the bottom of the #main element by adding the offset of that element plus its height, set it as a variable
        var mainbottom = $('#main').offset().top;

        // on scroll,
        $(window).on('scroll',function(){

        // we round here to reduce a little workload
        stop = Math.round($(window).scrollTop());
        if (stop > mainbottom) {
            $('.navbar').addClass('past-main');
            $('.navbar').addClass('effect-main')
        } else {
            $('.navbar').removeClass('past-main');
       }

      });


  // Collapse navbar on click

   $(document).on('click.nav','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') ) {
    $(this).removeClass('in').addClass('collapse');
   }
  });



    /*-----------------------------------
    ----------- Scroll To Top -----------
    ------------------------------------*/

    $(window).scroll(function () {
      if ($(this).scrollTop() > 1000) {
          $('#back-top').fadeIn();
      } else {
          $('#back-top').fadeOut();
      }
    });
    // scroll body to 0px on click
    $('#back-top').on('click', function () {
      $('#back-top').tooltip('hide');
      $('body,html').animate({
          scrollTop: 0
      }, 1500);
      return false;
    });

  /*-------- Owl Carousel ---------- */
    $('.reviews').owlCarousel({
    slideSpeed : 1000,
    items: 1,
    singleItem: true,
    autoPlay : 6000,
    pagination : true,
    });
    $('.works_slider').owlCarousel({
    slideSpeed : 1000,
    items: 5,
    responsive : {
            0 : {
                items : 1,
            },
            480 : {
                items : 2,
            },
            768 : {
                items : 3,
            },
            991 : {
                items : 5,
            },
          },
    singleItem: false,
    autoPlay : 6000,
    pagination : true,
    });


  /* ------ jQuery for Easing min -- */

    $(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
  });



/* --------- Wow Init ------ */

  new WOW().init();


  /* ----- Counter Up ----- */

$('.counter').counterUp({
		delay: 10,
		time: 1000
});


/*----- Preloader ----- */

    $(window).load(function() {
  		setTimeout(function() {
        $('#loading').fadeOut('slow', function() {
        });
      }, 3000);
    });


  $(function() {
    var curURL = document.URL;
    if(curURL.match(/lp/)){   //URLにinformationがある時に
      if(curURL.match(/\?page=webform_preview/)){//URLにパラメーターが既についているか判断する。
        location.href = curURL + "#contact"
      }
    }
  });

});
