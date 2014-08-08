<?php
function ds_package() {
  return array(
    'label' => t('Package'),
    'regions' => array(
      'top' => t('Top'),
      'extend_details' => t('Extend details'),
      'medium_top' => t('Medium Top'),
      'medium_bottom' => t('Medium Bottom'),
      'tab_program' => t('Tab Programa'),
      'tab_gallery' => t('Tab Galeria'),
      'tab_hotels' => t('Tab Hoteles'),
      'tab_testimonies' => t('Tab Testimonios'),
      'tab_important_info' => t('Informacion Practica'),
      'location' => t('Ubicacion'),
      'questions' => t('Preguntas'),
      'bottom' => t('Fondo'),
    ),
    // Add this line if there is a default css file.
    'css' => TRUE,
  );
}
