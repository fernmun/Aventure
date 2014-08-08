<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php $count = 1; ?>
<?php foreach ($rows as $id => $row): ?>
    <?php if ($count == 1): ?>
    <?php print '<div class="wrapper-init-hotels">'; ?>
    <?php endif; ?>
    <div class="row-result-hotel-city">
      <?php print $row; ?>
    </div>
    <?php if ($count == 2):  ?>
    <?php
      $map = views_embed_view('hotels_in_city', 'block', arg(2));
      print $map;
     ?>
      <?php print '</div>'; ?>
    <?php endif; ?>

    <?php $count++; ?>
<?php endforeach; ?>
