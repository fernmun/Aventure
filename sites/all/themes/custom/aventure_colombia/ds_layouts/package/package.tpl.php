<div class="<?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php if($top): ?>
  <div id="dest-paquete">
    <?php print $top; ?>
  </div>
  <?php endif; ?>

  <div class="details_conten" id="more_information">
    <div id="extend-details-package">
      <div id="narrow-expand">
        <?php print t('Extend details of this trip'); ?>
      </div>
      <div class="cls-content">
        <?php
          $block = module_invoke('easy_social', 'block_view', 'easy_social_block_1');
          print render($block['content']);
        ?>
        <?php print l(t('Book now'), '#', array('attributes' => array('class' => array('cls-reserve')))); ?>
      </div>
      <div class="hidden">
        <?php print $extend_details; ?>
      </div>
    </div>
  </div>
  <?php if ($medium_top): ?>
    <div class="row">
      <div class="large-12 columns ds-medium-top-paquete<?php print $medium_top_classes; ?>">
        <?php print $medium_top; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($medium_bottom): ?>
    <div class="row">
      <div class="large-12 columns ds-medium-bottom-paquete<?php print $medium_bottom_classes; ?>">
        <?php print $medium_bottom; ?>
      </div>
    </div>
  <?php endif; ?>

  <div id="tabs" class="row">
    <div class="large-12 columns">
      <ul>
        <li> <a href="#tab-1"> <?php print t('Program'); ?> </a> </li>
        <li> <a href="#tab-2"> <?php print t('Photo Gallery'); ?> </a> </li>
        <li> <a href="#tab-3"> <?php print t('Hotels'); ?> </a> </li>
        <li> <a href="#tab-4"> <?php print t('Testimonies'); ?> </a> </li>
        <li> <a href="#tab-5"> <?php print t('Practic Information'); ?> </a> </li>
        <li> 
        <?php if ($location): ?>
            <div id="tab-6 location">
              <?php print $location; ?>
            </div>
        <?php endif; ?>
        </li>
      </ul>

      <div id="tab-1">
        <?php if ($tab_program): ?>
          <?php print $tab_program; ?>
          <div id="included-not-included">
            <?php
              $inluded_html = "<span class='included'>" . t('¿Included?') . "</span>";
              $not_included_html = "<span class='not-included'>" . t('¿Not Included?') . "</span>";        

              if (empty($incluye) || empty($no_incluye)) {
                $node       = menu_get_object();
                $incluye    = $node->field_incluye[LANGUAGE_NONE][0]['safe_value'];
                $no_incluye = $node->field_no_incluye[LANGUAGE_NONE][0]['safe_value'];
                print "<div class='includes-title'> $inluded_html <span>/</span> $not_included_html </div>";
                print "<div class='field-includes content'> $incluye </div>";
                print "<div class='field-not-includes content'> $no_incluye </div>";
              }
            ?>
          </div>
        <?php endif; ?>
      </div>

      <div id="tab-2">
        <?php if ($tab_gallery): ?>
          <?php print $tab_gallery; ?>
        <?php endif; ?>
      </div>

      <div id="tab-3">
        <?php if ($tab_hotels): ?>
          <?php print $tab_hotels; ?>
        <?php endif; ?>
      </div>

      <div id="tab-4">
        <?php if ($tab_testimonies): ?>
          <?php print $tab_testimonies; ?>
        <?php endif; ?>
      </div>

      <div id="tab-5">
        <?php if ($tab_important_info): ?>
          <?php print $tab_important_info; ?>
        <?php endif; ?>
      </div>

    </div>
  </div>

  <?php if ($questions): ?>
    <div class="row">
      <div class="large-12 columns ds-questions-paquete<?php print $questions_classes; ?>">
        <?php print $questions; ?>
      </div>
    </div>
  <?php endif; ?>
<div class="separator-home"></div>
  <?php if ($bottom): ?>
    <div class="row">
      <div class="large-12 columns ds-bottom-paquete<?php print $bottom_classes; ?>">
        <?php print $bottom; ?>
      </div>
    </div>
  <?php endif; ?>

</div>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
