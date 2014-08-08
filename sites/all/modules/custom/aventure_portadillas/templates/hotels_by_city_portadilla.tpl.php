<div class="header-hotels-wrapper">
<div class="lowest-price-hotels">
  <?php print t('We have the lowest price, ¡guaranteed!'); ?>
</div>
<div class="paragraph-hotels">
  <?php print t('Integer? Proin, rhoncus hac habitasse dapibus, penatibus, placerat nascetur, sed in velit. Urna platea, elementum, ac, sagittis sagittis tempor arcu elementum mauris. Et adipiscing, cum adipiscing, tristiq'); ?>
</div>

<div class="statistics-wrapper">
  <?php
    $block = module_invoke('easy_social', 'block_view', 'easy_social_block_1');
    print render($block['content']);
    ?>
  <?php
    $hotel_statistics =
      module_invoke('aventure_portadillas', 'block_view', 'hotel_statistics');
    print render($hotel_statistics['content']);
  ?>
</div>
</div>

<div class="results-hotels">
  <?php
    print $view;
  ?>
</div>

<?php
  $suscription_form =
    module_invoke('aventure_mail_suscription', 'block_view', 'suscription_form');
  print render($suscription_form['content']);
?>