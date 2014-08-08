<div class="<?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php if ($top): ?>
    <div class="row">
      <div class="large-12 columns ds-top-hotel<?php print $top_classes; ?>">
        <?php print $top; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($left || $right): ?>
  <div class="row">
    <?php if ($left): ?>
    <div class="large-6 columns">
      <div class="ds-left-hotel<?php print $left_classes; ?>">
        <?php print $left; ?>
      </div>
    </div>
    <?php endif; ?>
    <?php if ($right): ?>
    <div class="large-6 columns">
      <div class="ds-right-hotel<?php print $right_classes; ?>">
        <?php print $right; ?>
      </div>
    </div>
    <?php endif; ?>
  </div>
  <?php endif; ?>

  <?php if ($similar_elements): ?>
  <div class="similar_elements">
    <div class="ds-similar-elements-hotel<?php print $similar_elements_classes; ?>">
      <?php print $similar_elements; ?>
    </div>
  </div>
  <?php endif; ?>

  <?php if ($comments || $bottom_right): ?>
  <div class="row row-comments">
    <?php if ($comments): ?>
      <div class="large-8 columns">
        <div class="ds-comments-hotel<?php print $comments_classes; ?>">
          <?php print $comments; ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($bottom_right): ?>
    <div class="large-4 columns">
      <div class="ds-bottom-right-hotel<?php print $bottom_right_classes; ?>">
        <?php print $bottom_right; ?>
      </div>
    </div>
    <?php endif; ?>
  </div>
<?php endif; ?>

  <?php if ($bottom): ?>
  <div class="row">
    <div class="large-12 columns">
      <div class="ds-bottom-hotel<?php print $bottom_classes; ?>">
        <?php print $bottom; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

</div>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
