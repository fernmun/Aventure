<?php
/**
 * @file
 * Provides administration forms for blocks
 */

/**
 * Configuration form for main block.
 */
function pre_main_block_form($form, &$form_state) {
  $form['list_summary'] = array(
    '#title' => t('List Items'),
    '#type' => 'textarea',
    '#description' => t('Write one item per line'),
    '#default_value' => variable_get('list_summary', ''),
  );
  $form['event_date'] = array(
    '#title' => t('Event Date'),
    '#type' => 'fieldset',
    '#collasible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['event_date']['event_year'] = array(
    '#title' => t('Year'),
    '#type' => 'textfield',
    '#size' => 4,
    '#maxlength' => 4,
    '#required' => true,
    '#default_value' => variable_get('event_year', ''),
  );
  $form['event_date']['event_month'] = array(
    '#title' => t('Month'),
    '#type' => 'textfield',
    '#size' => 2,
    '#maxlength' => 2,
    '#required' => true,
    '#default_value' => variable_get('event_month', ''),
  );
  $form['event_date']['event_day'] = array(
    '#title' => t('Day'),
    '#type' => 'textfield',
    '#size' => 2,
    '#maxlength' => 2,
    '#required' => true,
    '#default_value' => variable_get('event_day', ''),
  );
  return system_settings_form($form);
}