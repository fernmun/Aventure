<?php

/**
 *  Implements preprocess_node().
 */
function aventure_colombia_preprocess_node(&$vars) {
  switch ($vars['type']) {
    case 'paquete':
      drupal_add_library ( 'system' , 'ui.tabs' );
      drupal_add_js(drupal_get_path('module', 'aventure_sliders')
        . '/js/aventure_toggle_more_info.js');

      drupal_add_js ( 'jQuery(document).ready(function(){
        jQuery( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
        jQuery( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
      });
      ' , 'inline' );

    drupal_add_js ('jQuery(document).ready(function(){
        jQuery("#included-not-included .included").click(function(){
          jQuery("#included-not-included .field-not-includes").hide();
          jQuery("#included-not-included .field-includes").show();
          jQuery("#included-not-included span.not-included").removeClass("active");
          jQuery("#included-not-included span.included").addClass("active");
        });
      });
      ' , 'inline' );

    drupal_add_js ('jQuery(document).ready(function(){
        jQuery("#included-not-included .not-included").click(function(){
          jQuery("#included-not-included .field-includes").hide();
          jQuery("#included-not-included .field-not-includes").show();
          jQuery("#included-not-included span.included").removeClass("active");
          jQuery("#included-not-included span.not-included").addClass("active");
        });
      });
  ' , 'inline' );

    drupal_add_js(drupal_get_path('module', 'aventure_views_hacks') . '/js/aventure_views_hacks.js', array(
        'weight' => 10000, // Something higher than the weight of existing items
        'scope' => 'footer', // Make sure the script tag is rendered in the footer of the page, not the header
        'group' => JS_THEME, // JS_THEME has the highest group weight and will be rendered last
    ));
    $vars['incluye'] = $vars['field_incluye'][0]['value']?:'';
    $vars['no_incluye'] = $vars['field_no_incluye'][0]['value']?:'';
    break;
  }
}

function aventure_colombia_radio($variables) {
  $element = $variables['element'];
  $element['#attributes']['type'] = 'radio';
  element_set_attributes($element, array('id', 'name', '#return_value' => 'value'));

  if (isset($element['#return_value']) && $element['#value'] !== FALSE && $element['#value'] == $element['#return_value']) {
    $element['#attributes']['checked'] = 'checked';
  }
  _form_set_class($element, array('form-radio'));

  return '<input' . drupal_attributes($element['#attributes']) . ' /><span> </span>';
}

function aventure_colombia_checkbox($variables) {
  $element = $variables['element'];
  $element['#attributes']['type'] = 'checkbox';
  element_set_attributes($element, array('id', 'name', '#return_value' => 'value'));

  // Unchecked checkbox has #value of integer 0.
  if (!empty($element['#checked'])) {
    $element['#attributes']['checked'] = 'checked';
  }
  _form_set_class($element, array('form-checkbox'));

  return '<input' . drupal_attributes($element['#attributes']) . ' /> <span> </span>';
}

