<div class="<?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php if ($top): ?>
  <div class="row">
    <div class="large-12 columns">
      <div class="ds-top-testimony<?php print $top_classes; ?>">
        <?php print $top; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <?php if ($left || $right): ?>
  <div class="row">
    <?php if ($left): ?>
    <div class="large-6 columns">
      <div class="ds-left-testimony<?php print $left_classes; ?>">
        <?php print $left; ?>
      </div>
    </div>
    <?php endif; ?>

    <?php if ($right): ?>
    <div class="large-6 columns">
      <div class="ds-right-testimony<?php print $right_classes; ?>">
        <?php print $right; ?>
      </div>
    </div>
    <?php endif; ?>
  </div>
  <?php endif; ?>

  <?php if ($others_place_testimony): ?>
  <div class="row">
    <div class="large-12 columns">
      <div class="ds-others-place-testimony<?php print $bottom_classes; ?>">
        <?php print $others_place_testimony; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <?php if ($others_testimonies): ?>
  <div class="row">
    <div class="large-12 columns">
      <div class="ds-others-testimony<?php print $bottom_classes; ?>">
        <?php print $others_testimonies; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <?php if ($bottom): ?>
  <div class="row">
    <div class="large-12 columns">
      <div class="ds-bottom-testimony<?php print $bottom_classes; ?>">
        <?php print $bottom; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

</div>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
