<?php

/**
 * @file
 * Bartik's theme implementation to provide an HTML container for comments.
 *
 * Available variables:
 * - $content: The array of content-related elements for the node. Use
 *   render($content) to print them all, or
 *   print a subset such as render($content['comment_form']).
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default value has the following:
 *   - comment-wrapper: The current template type, i.e., "theming hook".
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * The following variables are provided for contextual information.
 * - $node: Node object the comments are attached to.
 * The constants below the variables show the possible values and should be
 * used for comparison.
 * - $display_mode
 *   - COMMENT_MODE_FLAT
 *   - COMMENT_MODE_THREADED
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess_comment_wrapper()
 */
?>

<?php 
//Alter lables
$content['comment_form']['subject']['#title'] = t('Title of your opinion');

$content['comment_form']['actions']['submit']['#value'] = t('Opine');

$content['comment_form']['#groups']['group_hotel_services']->format_settings = array();

$stars = field_view_field('node', $content['comment_form']['#node'], 'field_hotel_average_raiting', array(
  'label' => 'hidden',
));

//kpr($stars);
$stars = null;

?>

<div id="comments" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php if ($content['comment_form']): ?>
    
    <h2 class="title comment-form"><?php print t('Tell us your experience in ') . $content['comment_form']['#node']->title  . '!'; ?></h2>
    <?php print render($stars); ?>
    <?php print render($content['comment_form']); ?>
  <?php endif; ?>

  <?php if ($content['comments'] && $node->type != 'forum'): ?>
    <div class="hotel-comments">
      <?php print render($title_prefix); ?>
      <h2 class="title"><?php print t('Review of ') . $content['comment_form']['#node']->title; ?></h2>
      <?php print render($title_suffix); ?>
      <?php print render($content['comments']); ?>  
    </div>
  <?php endif; ?>

</div>