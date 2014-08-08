<div class="<?php print $classes;?> clearfix">

  <?php //if (isset($title_suffix['contextual_links'])): ?>
  <?php //print render($title_suffix['contextual_links']); ?>
  <?php //endif; ?>

  <?php if ($left || $right): ?>
  <div class="row">
    <?php if ($left): ?>
    <div class="large-8 columns">
      <div class="ds-left-question-answer<?php print $left_classes; ?>">
        <?php print $left; ?>
      </div>
    </div>
    <?php endif; ?>
    <?php if ($right): ?>
    <div class="large-4 columns">
      <div class="ds-right-question-answer<?php print $right_classes; ?>">
        <?php print $right; ?>
      </div>
    </div>
    <?php endif; ?>
  </div>
  <?php endif; ?>

  <?php if ($bottom): ?>
  <div class="row">
    <div class="large-12 columns">
      <div class="ds-bottom-question-answer<?php print $bottom_classes; ?>">
        <?php print $bottom; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

</div>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
