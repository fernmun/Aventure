(function ($) {
  Drupal.behaviors.aventureSliderStrongPoints = {
    attach: function (context, settings) {
      $('.flexslider_strong_points').flexslider({
        animation: "slide",
        slideshow: false
      });
    }
  };
})(jQuery);
