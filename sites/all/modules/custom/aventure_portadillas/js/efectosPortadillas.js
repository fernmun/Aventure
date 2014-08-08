(function ($) {
  Drupal.behaviors.exampleModule = {
    attach: function (context, settings) {
      $('.each-hotel-result').each(function(){
        $(this).find('.total-stars').raty({
          readOnly: true,
          path: 'http://aventure_colombia.dev/www/aventura-colombia/sites/all/modules/custom/aventure_libraries/libraries/raty/img/',
          score: function() {
            return 3;
          }
        });
      });
    }
  };
})(jQuery);