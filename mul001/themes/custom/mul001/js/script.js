$(function() {
  var $win = $(window),
      $main = $('.wrap'),
      $nav = $('#header'),
      navHeight = $nav.outerHeight(),
      navPos = $nav.offset().top,
      fixedClass = 'scrolled';

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > navPos ) {
      $nav.addClass(fixedClass);
      $main.css('margin-top', navHeight);
    } else {
      $nav.removeClass(fixedClass);
      $main.css('margin-top', '0');
    }
  });
});

(function($) {
  $( window ).resize( function(){
    var div_height = $('.views_slideshow_cycle_slide').height();
    $('.views_slideshow_cycle_teaser_section').height(div_height);
  });
})(jQuery);
