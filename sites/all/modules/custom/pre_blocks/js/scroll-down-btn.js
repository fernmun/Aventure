(function($) {
  Drupal.behaviors.scroll_down_btn = {
    attach : function(context, settings) {
      $('body').once('scroll_down_btn', function() {
        $('#pre-suscribe-button', context).click(function(evt) {
          evt.preventDefault();
          $('html, body').animate({ scrollTop: $(document).height() }, 500);
          return false;
        });
        $('.argumentation-list-item-container a', context).click(function(evt) {
          evt.preventDefault();
          $('#pre-registration-form #edit-email').focus();
          return false;
        });
      });     
    }
  };
})(jQuery);
