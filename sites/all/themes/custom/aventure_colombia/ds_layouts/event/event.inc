<?php
function ds_event() {
  return array(
    'label' => t('Event'),
    'regions' => array(
      'left' => t('Izquierda'),
      'right' => t('Derecha'),
      'other_events' => t('Otros eventos'),
      'comments' => t('Comentarios'),
      'bottom' => t('Fondo'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
  );
}
