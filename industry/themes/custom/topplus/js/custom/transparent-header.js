(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.mtTransparentHeader = {
    attach: function (context, settings) {
      if ($('.banner .slideshow-fullscreen').length > 0) {
        $(".header-container").addClass("js-display-absolute");
      } else {
        $(".header-container").removeClass("js-display-absolute");
      }
    }
  };
})(jQuery, Drupal, drupalSettings);