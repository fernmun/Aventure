<?php
function ds_contact() {
  return array(
    'label' => t('Contact'),
    'regions' => array(
      'webform' => t('Webform'),
      'extra' => t('Extra'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
  );
}
