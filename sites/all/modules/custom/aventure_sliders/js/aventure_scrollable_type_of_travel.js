(function ($) {
  Drupal.behaviors.aventureScrollableTypeOfTravel = {
    attach: function (context, settings) {
      $(".scrollable").scrollable({
        keyboard: false,
        circular: true
      }).navigator();
  }
    };
})(jQuery);
