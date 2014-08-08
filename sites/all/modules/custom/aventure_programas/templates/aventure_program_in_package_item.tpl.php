<div class="content_pack">
  <div class="content_pack_place">
    <span class="number-day-package">
      <?php print t('Day @number_day', array('@number_day' => $number_day)); ?>
    </span>
    <span class="destiny-package">
      <?php print $name_destination; ?>
    </span>
  </div>
  <div class="info-destiny-wrapper">
    <?php print $image; ?>
    <div class="title-destiny-package">
      <h4> <?php print $title; ?> </h4>
    </div>
    <div class="desc-destiny-package">
      <?php print $body['value']; ?>
    </div>
  </div>
</div>
