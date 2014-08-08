(function ($) {
  Drupal.behaviors.aventureToggleMoreInfo = {
    attach: function (context, settings) {
      $('#narrow-expand').click(function(){
        $('html, body').animate({scrollTop : $('#more_information').offset().top},'slow');
     	});
    }
  };
})(jQuery);
