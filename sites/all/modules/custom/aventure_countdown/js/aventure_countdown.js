  (function ($) {
  Drupal.behaviors.aventureCountdown = {
    attach: function (context, settings) {
      $('.counterdown').countdown({
        stepTime: 60,
        format: 'hh:mm:ss',
        startTime: "1:32:55",
        digitImages: 6,
        digitWidth: 53,
        digitHeight: 77,
        image: "/sites/all/modules/custom/aventure_libraries/libraries/jquery.countdown/img/digits.png"
      });
    }
  };
})(jQuery);
