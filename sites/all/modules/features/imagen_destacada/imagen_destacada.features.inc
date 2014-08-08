<?php
/**
 * @file
 * imagen_destacada.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function imagen_destacada_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function imagen_destacada_node_info() {
  $items = array(
    'imagen_destacada' => array(
      'name' => t('Imagen destacada'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Título'),
      'help' => '',
    ),
  );
  return $items;
}
