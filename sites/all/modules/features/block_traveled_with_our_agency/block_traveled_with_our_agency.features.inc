<?php
/**
 * @file
 * block_traveled_with_our_agency.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function block_traveled_with_our_agency_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "bean_admin_ui" && $api == "bean") {
    return array("version" => "5");
  }
  list($module, $api) = func_get_args();
  if ($module == "ds" && $api == "ds") {
    return array("version" => "1");
  }
}
