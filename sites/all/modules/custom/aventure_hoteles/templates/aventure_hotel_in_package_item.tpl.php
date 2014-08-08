<div class="every-hotel-package">
  <?php print l($image, $link, array('html' => true)); ?>
  <span class="title-hotel-package">
    <?php print l($title, $link); ?>
  </span>
  <span class="place-hotel-package">
    <?php print $place; ?>
  </span>
  <span class="desc-hotel-package">
    <?php print $body['value']; ?>
  </span>
</div>
