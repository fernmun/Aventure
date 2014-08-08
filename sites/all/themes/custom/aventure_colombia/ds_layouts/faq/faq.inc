<?php
function ds_faq() {
  return array(
    'label' => t('FAQ'),
    'regions' => array(
      'top' => t('Top'),
      'left' => t('Izquierda'),
      'right' => t('Derecha'),
      'bottom' => t('Fondo'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
  );
}
