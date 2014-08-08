<div class="<?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php if ($left || $right): ?>
  <div class="row">
    <?php if ($left): ?>
    <div class="large-8 columns">
      <div class="ds-left-event<?php print $left_classes; ?>">
        <?php print $left; ?>
      </div>
    </div>
    <?php endif; ?>
    <?php if ($right): ?>
    <div class="large-4 columns">
      <div class="ds-right-event<?php print $right_classes; ?>">
        <?php print $right; ?>
      </div>
    </div>
    <?php endif; ?>
  </div>
  <?php endif; ?>

  <?php if ($other_events): ?>
  <div class="similar_elements">
    <div class="ds-other-events-event<?php print $other_links_classes; ?>">
      <?php print $other_events; ?>
    </div>
  </div>
  <?php endif; ?>

    <?php if ($comments): ?>
      <div class="row row-comments">
      <div class="large-8 columns">
        <div class="ds-comments-event<?php print $comments_classes; ?>">
          <?php print $comments; ?>
        </div>
      </div>
    </div>
    <?php endif; ?>


  <?php if ($bottom): ?>
  <div class="row">
    <div class="large-12 columns">
      <div class="ds-bottom-event<?php print $bottom_classes; ?>">
        <?php print $bottom; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>

</div>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
