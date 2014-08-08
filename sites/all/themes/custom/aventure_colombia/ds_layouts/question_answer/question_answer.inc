<?php
function ds_question_answer() {
  return array(
    'label' => t('Question & Answer'),
    'regions' => array(
      'left' => t('Izquierda'),
      'right' => t('Derecha'),
      'bottom' => t('Fondo'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
  );
}
