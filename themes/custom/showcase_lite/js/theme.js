//表示されたらアニメーション
jQuery(document).ready(function(){
  jQuery('.animated').each(function () {
    jQuery(this).on('inview', function(event, isInView) {
      if (isInView) {
        jQuery(this).css('opacity','1');
      }
    });
  });
  jQuery('.fade-in-left').each(function () {
    jQuery(this).on('inview', function(event, isInView) {
      if (isInView) {
        jQuery(this).addClass('fadeInLeft');
      }
    });
  });
  jQuery('.fade-in-up').each(function () {
    jQuery(this).on('inview', function(event, isInView) {
      if (isInView) {
        jQuery(this).addClass('fadeInUp');
      }
    });
  });
  jQuery('.fade-in-down').each(function () {
    jQuery(this).on('inview', function(event, isInView) {
      if (isInView) {
        jQuery(this).addClass('fadeInDown');
      }
    });
  });
  jQuery('.zoom-in').each(function () {
    jQuery(this).on('inview', function(event, isInView) {
      if (isInView) {
        jQuery(this).addClass('zoomIn');
      }
    });
  });
  // matchHeight
  jQuery('.mhBox').matchHeight();
  // 可視領域に入ると表示
  jQuery('.effect').css("opacity","0");
    jQuery(window).scroll(function (){
      jQuery('.effect').each(function(){
        var ef = jQuery(this).offset().top;
        var sc = jQuery(window).scrollTop();
        var wh = jQuery(window).height();
        if (sc > ef - wh + 100){
          jQuery(this).animate({
          "opacity": "1"
          }, 1000);
        }
      });
    });
  //行数で文字カット
  jQuery('.trunk8').trunk8({
    lines: 1
  });
  //shuffle.js
  jQuery(function() {
		jQuery('#category li').on('click', function() {
			var target = jQuery(this),
			grid = jQuery('.shuffleList');
			jQuery('#category .active').removeClass('active');
			target.addClass('active');
			grid.shuffle(target.data('group'));
		});
		jQuery('.shuffleList').shuffle({
			group: 'all',
			speed: 400,
			easing: 'ease-in-out'
		});
	});
});

//実績詳細ページでグローバルナビの色変更
jQuery(window).on('load',function(){
　if(document.URL.match('work')) {
    jQuery('#main-menu-link-content978b1721-d855-4649-81a0-2c36a068cb29').addClass('active-trail');
　}
});


// DIRTY Responsive pricing table JS

jQuery( "#pricingTable ul" ).on( "click", "li", function() {
  var pos = jQuery(this).index()+2;
  jQuery("#pricingTable tr").find('td:not(:eq(0))').hide();
  jQuery('#pricingTable td:nth-child('+pos+')').css('display','table-cell');
  jQuery("#pricingTable tr").find('th:not(:eq(0))').hide();
  jQuery('#pricingTable li').removeClass('active');
  jQuery(this).addClass('active');
});

// Initialize the media query
  var mediaQuery = window.matchMedia('(min-width: 1200px)');

  // Add a listen event
  mediaQuery.addListener(doSomething);

  // Function to do something with the media query
  function doSomething(mediaQuery) {
    if (mediaQuery.matches) {
      jQuery('#pricingTable .sep').attr('colspan',5);
    } else {
      jQuery('#pricingTable .sep').attr('colspan',2);
    }
  }

  // On load
  doSomething(mediaQuery);

 //matchHeight
 jQuery('.mhTitle').matchHeight();

 //toTop
  var pagetop = jQuery('#page_top');
  pagetop.hide();
  jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 200) {  //100pxスクロールしたら表示
          pagetop.fadeIn();
      } else {
          pagetop.fadeOut();
      }
  });
  pagetop.click(function () {
      jQuery('body,html').animate({
          scrollTop: 0
      }, 500); //0.5秒かけてトップへ移動
      return false;
  });
