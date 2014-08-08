(function ($) {
  Drupal.behaviors.aventureSliders = {
    attach: function (context, settings) {
      $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails",
        slideshow: false,
      });
    }
  };
})(jQuery);

google.maps.event.addListener(map, "zoom_changed", function() {
        var Z=map.getZoom();
        if (Z > 5) {map.setZoom(5);}
        else if (Z < 1) {map.setZoom(1);}
});