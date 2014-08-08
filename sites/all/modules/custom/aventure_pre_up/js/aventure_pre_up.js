(function ($) {

  Drupal.behaviors.pre_blocks = {
    attach: function (context, settings) {
      var initial_top = $(window).scrollTop();
      if (initial_top < 400) {
        $('.pre-up-button').hide();
      };
      $(window).scroll(function() {
        var top = $(window).scrollTop();
        if (top > 400) {
          $('.pre-up-button').fadeIn();
        }else{
          $('.pre-up-button').fadeOut();
        }
      });
      $('.pre-up-button', context).click(function(){
        $('html, body').animate({scrollTop : 0},'slow');
      });
      $('#block-system-main-menu .menu li a', context).each(function(index){
        $(this).click(function(event){
          var aim = $(this).attr('href');
          aim = aim.replace('/', '');
          var aimpos = $('' + aim + ' h2.block-title').offset();
          console.log(aimpos.top);
          event.preventDefault();
          $('html, body').animate({scrollTop : aimpos.top},'slow');
        });
      });
    }
  };

})(jQuery);