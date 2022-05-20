(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.mtSliderRevolutionCarousel = {
    attach: function (context, settings) {
      $(context).find('.slideshow-carousel .rev_slider').once('mtSliderRevolutionCarouselInit').show().revolution({
        sliderType:"carousel",
        sliderLayout:"auto",
        gridwidth: '580',
        gridheight: drupalSettings.topplus.sliderRevolutionCarouselInit.slideshowCarouselInitialHeight,
        disableProgressBar:'on',
        navigation: {
          onHoverStop:"off",
          arrows:{
            enable:true,
            tmp: "<div class='tp-title-wrap'><span class='tp-arr-titleholder'>{{title}}</span></div>",
            left:{
              h_align:"left",
              v_align:"center",
              h_offset:0,
              v_offset:0
            },
            right:{
              h_align:"right",
              v_align:"center",
              h_offset:0,
              v_offset:0
            }
          },
          bullets:{
            style:"",
            enable: true,
            direction:"horizontal",
            space: 20,
            h_align: drupalSettings.topplus.sliderRevolutionCarouselInit.slideshowCarouselBulletsPosition,
            v_align:"bottom",
            h_offset: 0,
            v_offset: 30,
            tmp:"<span></span>",
            hide_onleave: false,
            hide_onmobile: false
          },
          touch:{
            touchenabled: drupalSettings.topplus.sliderRevolutionCarouselInit.slideshowCarouselTouchSwipe,
            swipe_treshold:75,
            swipe_min_touches:1,
            drag_block_vertical:false,
            swipe_direction:"horizontal"
          },
        },
        carousel: {
          padding_top: "10",
          padding_bottom: "50",
          maxRotation: 0,
          vary_rotation: "off",
          minScale: 45,
          vary_scale: "on",
          horizontal_align: "center",
          vertical_align: "center",
          fadeout: "off",
          vary_fade: "off",
          maxVisibleItems: 5,
          infinity: "on",
          space: -135,
          stretch: "off"
        },
        stopLoop:"on",
        stopAfterLoops:0,
        stopAtSlide:1,
        autoHeight:"off"
      });

      $(context).find('.transparent-background').once('mtSliderRevolutionCarouselBG').css("backgroundColor", "rgba(0,0,0," + drupalSettings.topplus.slideshowBackgroundOpacity + ")");
      $(context).find('.tp-caption--transparent-background .tp-caption__title').once('mtSliderRevolutionCarouselCaptionBG').css("backgroundColor", "rgba(0,0,0," + drupalSettings.topplus.slideshowCaptionOpacity + ")");
      $(context).find('.tp-caption--transparent-background .tp-caption__text').once('mtSliderRevolutionCarouselCaptionBG').css("backgroundColor", "rgba(0,0,0," + drupalSettings.topplus.slideshowCaptionOpacity + ")");

    }
  };
})(jQuery, Drupal, drupalSettings);
;
