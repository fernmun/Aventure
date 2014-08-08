<div>
  <h3> <?php print t('Would you like to book in @hotel_name Hotel?', array('@hotel_name' => $hotel_name)); ?> </h3>
  <h4> -- <?php print t('We have the lowest prices'); ?> -- </h4>
  <?php print l(t('¡Book it!'), 'node/' . $nid); ?>
</div>
