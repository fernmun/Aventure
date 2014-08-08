<?php
/**
 * @file
 * block_traveled_with_our_agency.ds.inc
 */

/**
 * Implements hook_ds_view_modes_info().
 */
function block_traveled_with_our_agency_ds_view_modes_info() {
  $export = array();

  $ds_view_mode = new stdClass();
  $ds_view_mode->api_version = 1;
  $ds_view_mode->view_mode = 'home_traveled_with_us';
  $ds_view_mode->label = 'Home Traveled With Us';
  $ds_view_mode->entities = array(
    'bean' => 'bean',
  );
  $export['home_traveled_with_us'] = $ds_view_mode;

  return $export;
}
