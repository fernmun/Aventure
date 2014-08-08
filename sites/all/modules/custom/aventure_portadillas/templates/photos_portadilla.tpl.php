<div class="row">
  <div class="titles header-portadilla">
    <h1> <?php print t('Photos'); ?> </h1>
    <h2> <?php print t('Find inspiration for your next travel to Colombia'); ?> </h2>
  </div>
</div>
<div class="middle row">


  <div class="text-intro-photos">
    <?php
    print t('Discover our destinations in pictures! Inspire yourself with this overview of the most beautiful landscapes in Colombia and soak up the culture and the atmosphere of Colombia. From the Guajira desert to the pre-Columbian sites of San Agustín, select the trip that suits you.');
    ?>
</div>
  <div class="r-block">
    <?php
    $block = module_invoke('easy_social', 'block_view', 'easy_social_block_1');
    print render($block['content']);
    ?>
    <?php
    $photos_statistics =
      module_invoke('aventure_portadillas', 'block_view', 'photos_statistics');
    print render($photos_statistics['content']);
    ?>
  </div>

  <div class="row">
    <div class="content-photos-results">
      <?php print $view; ?>
    </div>
  </div>
</div>
<div class="row"> <div class="twelve columns">
  <?php
  $suscription_form = module_invoke('aventure_mail_suscription',
    'block_view', 'suscription_form');
  print render($suscription_form['content']);
?>
</div> </div>
