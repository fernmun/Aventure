<?php
?>
<div class="<?php print $classes . ' ' . $zebra; ?>"<?php print $attributes; ?>>

  <div class="clearfix">

  <?php if ($new): ?>
    <span class="new"><?php print drupal_ucfirst($new) ?></span>
  <?php endif; ?>
    <div class="comment-info">
      <p class="name-comment"><?php print $content['comment_body']['#object']->name; ?></p>
      <p class="date-comment"><?php print t('Stayed in') . ' ' . format_date($content['comment_body']['#object']->field_comment_date['und'][0][value],
                                             'custom', 'F Y'); ?></p>
      <?php
      // Remove description from Fivestar widget
      $content['group_left_column']['field_hotel_average_raiting'][0]['user']['#description'] = '';
      print render($content['group_left_column']['field_hotel_average_raiting']); ?>      
    </div>

    <div class="content"<?php print $content_attributes; ?>>
      <?php print render($title_prefix); ?>
      <h3<?php print $title_attributes; ?>>"<?php print $title ?>"</h3>
      <?php print render($title_suffix); ?>
      <?php hide($content['links']); print render($content['comment_body'][0]['#markup']); ?>
      <?php if(isset($content['comment_body']['#object']->field_advise['und'][0]['safe_value'])): ?>
        <p class="advise">
          <span><?php print t('Advises:')?></span>
          <?php print $content['comment_body']['#object']->field_advise['und'][0]['safe_value']; ?>
        </p>
      <?php endif; ?>
      <?php if ($signature): ?>
      <div class="clearfix">
        <div>—</div>
        <?php print $signature ?>
      </div>
      <?php endif; ?>
    </div>
  </div>

  <?php print render($content['links']) ?>
</div>