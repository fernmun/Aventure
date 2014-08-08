<?php
function ds_testimony() {
  return array(
    'label' => t('Testimonio'),
    'regions' => array(
      'top' => t('Top'),
      'left' => t('Izquierda'),
      'right' => t('Derecha'),
      'others_place_testimony' => t('Otros lugares testimonios'),
      'others_testimonies' => t('Otros testimonios'),
      'bottom' => t('Fondo'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
  );
}
