<?php
/**
 * @file
 * imagen_destacada.strongarm.inc
 */

/**
 * Implements hook_strongarm().
 */
function imagen_destacada_strongarm() {
  $export = array();

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'comment_anonymous_imagen_destacada';
  $strongarm->value = 0;
  $export['comment_anonymous_imagen_destacada'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'comment_default_mode_imagen_destacada';
  $strongarm->value = 0;
  $export['comment_default_mode_imagen_destacada'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'comment_default_per_page_imagen_destacada';
  $strongarm->value = '10';
  $export['comment_default_per_page_imagen_destacada'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'comment_form_location_imagen_destacada';
  $strongarm->value = 0;
  $export['comment_form_location_imagen_destacada'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'comment_imagen_destacada';
  $strongarm->value = '0';
  $export['comment_imagen_destacada'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'comment_preview_imagen_destacada';
  $strongarm->value = '0';
  $export['comment_preview_imagen_destacada'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'comment_subject_field_imagen_destacada';
  $strongarm->value = 0;
  $export['comment_subject_field_imagen_destacada'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'field_bundle_settings_node__imagen_destacada';
  $strongarm->value = array(
    'view_modes' => array(),
    'extra_fields' => array(
      'form' => array(
        'title' => array(
          'weight' => '0',
        ),
        'path' => array(
          'weight' => '1',
        ),
      ),
      'display' => array(),
    ),
  );
  $export['field_bundle_settings_node__imagen_destacada'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'language_content_type_imagen_destacada';
  $strongarm->value = '1';
  $export['language_content_type_imagen_destacada'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'menu_options_imagen_destacada';
  $strongarm->value = array(
    0 => 'main-menu',
  );
  $export['menu_options_imagen_destacada'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'menu_parent_imagen_destacada';
  $strongarm->value = 'main-menu:0';
  $export['menu_parent_imagen_destacada'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_options_imagen_destacada';
  $strongarm->value = array(
    0 => 'status',
  );
  $export['node_options_imagen_destacada'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_preview_imagen_destacada';
  $strongarm->value = '0';
  $export['node_preview_imagen_destacada'] = $strongarm;

  $strongarm = new stdClass();
  $strongarm->disabled = FALSE; /* Edit this to true to make a default strongarm disabled initially */
  $strongarm->api_version = 1;
  $strongarm->name = 'node_submitted_imagen_destacada';
  $strongarm->value = 0;
  $export['node_submitted_imagen_destacada'] = $strongarm;

  return $export;
}
