<?php
function ds_prensa() {
  return array(
    'label' => t('Prensa'),
    'regions' => array(
      'left' => t('Izquierda'),
      'right' => t('Derecha'),
      'other_prensas' => t('Prensa'),
      'offer_prensa' => t('Oferta Prensa'),
      'comments' => t('comments'),
      'bottom' => t('Fondo'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
  );
}
