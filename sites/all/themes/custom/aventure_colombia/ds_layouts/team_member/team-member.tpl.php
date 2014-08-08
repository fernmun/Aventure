<div class="<?php print $classes;?> clearfix">

  <?php if ($left || $right): ?>
  <div class="row">
    <?php if ($left): ?>
    <div class="large-6 columns">
      <div class="ds-left-team-member<?php print $left_classes; ?>">
        <?php print $left; ?>
      </div>
    </div>
    <?php endif; ?>
    <?php if ($right): ?>
    <div class="large-6 columns">
      <div class="ds-right-team-member<?php print $right_classes; ?>">
        <?php print $right; ?>
      </div>
    </div>
    <?php endif; ?>
  </div>
  <?php endif; ?>

  <?php if ($more_info): ?>
  <div class="row">
    <div class="large-12 columns">
      <div class="ds-more-info-team-member<?php print $more_info_classes; ?>">
        <?php print $more_info; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <?php if ($other_info): ?>
  <div class="row">
    <div class="large-12 columns">
      <div class="ds-other-info-team-member<?php print $other_info_classes; ?>">
        <?php print $other_info; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <?php if ($comments || $bottom_right): ?>
  <div class="row row-comments">
    <?php if ($comments): ?>
    <div class="large-8 columns">
      <div class="ds-comments-team-member<?php print $comments_classes; ?>">
        <?php print $comments; ?>
      </div>
    </div>
    <?php endif; ?>

    <?php if ($bottom_right): ?>
    <div class="large-4 columns">
      <div class="ds-bottom-right-team-member<?php print $bottom_right_classes; ?>">
        <?php print $bottom_right; ?>
      </div>
    </div>
    <?php endif; ?>
  </div>
  <?php endif; ?>

  <?php if ($bottom): ?>
  <div class="row">
    <div class="large-12 columns">
      <div class="ds-bottom-team-member<?php print $bottom_classes; ?>">
        <?php print $bottom; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

</div>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
