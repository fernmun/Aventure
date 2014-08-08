(function ($) {
  Drupal.behaviors.social_share = {
    attach: function (context, settings) {
      FB.init({
        appId : '377354202368625'
      });
      $('body', context).once('social_share', function() {
        $('#pre-global-facebook-share', context).click(function(evt) {
          evt.preventDefault();
          FB.login(function(response) {
            if (response.authResponse) {
              FB.ui({
                method : 'feed',
                display : 'iframe',
                name : Drupal.settings.pre_blocks.name,
                link : Drupal.settings.pre_blocks.site_path,
                picture : Drupal.settings.pre_blocks.site_path + Drupal.settings.pre_blocks.image,
                access_token : FB.getAccessToken(),
                description : Drupal.settings.pre_blocks.description
              });
            }
            else {
              console.log('User cancelled login or did not fully authorize.');
            }
          });
        });
        $('#pre-global-twitter-share', context).click(function(evt) {
          evt.preventDefault();
          var url = "https://twitter.com/share?url=" + Drupal.settings.pre_blocks.site_path + "&text=" + Drupal.settings.pre_blocks.tweet;
          var twitterpopup = window.open(url, '',"height=300,width=600");
        });
      });
    }
  };
})(jQuery);