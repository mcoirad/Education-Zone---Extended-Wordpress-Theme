
jQuery(document).ready(function($){

      $('.flexslider').flexslider({
        animation: "slide"
         });
         
      $('.number').counterUp({
            delay: 10,
            time: 1000
        });

    	$('#responsive-menu-button').sidr({
          name: 'sidr-main',
          source: '#site-navigation',
          side: 'left'
        });
    $('#responsive-btn').sidr({
        name: 'sidr-secondary',
        source: '#secondary-navigation',
        side: 'right'
    });

      $(".photo-gallery .gallery").lightSlider({
            item: 5,
            autoWidth: false,
            slideMove: 1, // slidemove will be 1 if loop is true
            slideMargin: 0,
     
            addClass: '',
            mode: "slide",
            useCSS: true,
            cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
            easing: 'linear', //'for jquery animation',////
     
            speed: 400, //ms'
            auto: false,
            loop: false,
            slideEndAnimation: true,
            pause: 2000,
     
            keyPress: false,
            controls: true,
            prevHtml: '',
            nextHtml: '',
     
            rtl:false,
            adaptiveHeight:false,
     
            vertical:false,
            verticalHeight:500,
            vThumbWidth:100,
     
            thumbItem:10,
            pager: false,
            gallery: false,
            galleryMargin: 5,
            thumbMargin: 5,
            currentPagerPosition: 'middle',
     
            enableTouch:true,
            enableDrag:false,
            freeMove:true,
            swipeThreshold: 40,
     
            responsive : [
              {
                breakpoint:767.5,
                settings: {
                  item: 1,
                }
              }
            ],
     
            onBeforeStart: function (el) {},
            onSliderLoad: function (el) {},
            onBeforeSlide: function (el) {},
            onAfterSlide: function (el) {},
            onBeforeNextSlide: function (el) {},
            onBeforePrevSlide: function (el) {}
          });
});