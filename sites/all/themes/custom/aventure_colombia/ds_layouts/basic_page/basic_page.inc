<?php
function ds_contact() {
  return array(
    'label' => t('Basic Page'),
    'regions' => array(
      'body' => t('Body'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
  );
}
