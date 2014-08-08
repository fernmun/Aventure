<div class="row"> <div class="twelve columns">
<div class="titles portadilla-title">
  <h1> <?php print t('Colombia experts guide'); ?> </h1>
  <h2> <?php print t('The Aventure Colombia team'); ?> </h2>
</div>
</div> </div>
<div class="middle row">

  <div class="text-intro-members">
  <?php
    print t('Parturient nisi augue magna, lectus! Dapibus dolor turpis, arcu, augue? Elementum turpis purus eu vut est. Elementum sagittis? Aenean adipiscing egestas elit cum turpis, sed penatibus mauris. Sagittis parturient porttitor, enim duis a dis! Porttitor, elementum. Nec nascetur, urna platea. Urna hac amet dapibus mus. Facilisis pellentesque mid? Dignissim elit lectus u');
  ?>
  </div>

  <div class="r-block">
    <?php
    $block = module_invoke('easy_social', 'block_view', 'easy_social_block_1');
    print render($block['content']);
    ?>
  <?php
    $member_statistics =
      module_invoke('aventure_portadillas', 'block_view', 'member_statistics');
    print render($member_statistics['content']);
  ?>
  </div>
</div>


<div class="row"> <div class="twelve columns">
  <div class="content-members-results">
    <?php print $view; ?>
  </div>
</div> </div>
<div class="row"> <div class="twelve columns">
  <?php
  $suscription_form = module_invoke('aventure_mail_suscription',
    'block_view', 'suscription_form');
  print render($suscription_form['content']);
?>
</div> </div>

