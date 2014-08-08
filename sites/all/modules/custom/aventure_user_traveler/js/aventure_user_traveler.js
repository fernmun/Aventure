(function ($) {
  Drupal.behaviors.aventureList = {
    attach: function (context, settings) {
			$(".item-list ol li").wrapInner("<span> </span>");
    }
  };
})(jQuery);