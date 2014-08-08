<div class="<?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php if ($webform): ?>
  <div class="row">
    <div class="large-12 columns">
      <div class="ds-top-webform">
        <?php print $webform; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <?php if ($extra): ?>
  <div class="row">
    <div class="large-12 columns">
      <div class="ds-bottom-extra<?php print $bottom_classes; ?>">
        <?php print $extra; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

</div>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
