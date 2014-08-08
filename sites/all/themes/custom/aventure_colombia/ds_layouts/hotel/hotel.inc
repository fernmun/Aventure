<?php
function ds_hotel() {
  return array(
    'label' => t('Hotel'),
    'regions' => array(
      'top' => t('Top'),
      'left' => t('Izquierda'),
      'right' => t('Derecha'),
      'similar_elements' => t('Elementos Similares'),
      'comments' => t('Comentarios'),
      'bottom_right' => t('Fondo Derecha'),
      'bottom' => t('Fondo'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
  );
}
