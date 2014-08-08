(function ($) {
  Drupal.behaviors.aventureMainSliderBlock = {
    attach: function (context, settings) {
      $('.flexslider_main_content').flexslider({
        animation: "slide"
      });
    }
  };
})(jQuery);
