<?php

class NodeController extends BaseController {

  public function allNodes($language)
  {
    $nodes = Node::join('field_data_field_paquete_precio', 'node.nid', '=',
      'field_data_field_paquete_precio.entity_id')
      ->join('field_data_field_paquete_duracion', 'node.nid', '=',
        'field_data_field_paquete_duracion.entity_id')
      ->where('node.language', $language);

    $nodes = $nodes->join('field_data_field_paq_texto_introductorio', 'node.nid', '=',
      'field_data_field_paq_texto_introductorio.entity_id');

    $nodes = $nodes->join('field_data_field_path_image_cache_271x182', 'node.nid', '=',
      'field_data_field_path_image_cache_271x182.entity_id');

    $nodes = $nodes->remember(5)->distinct()->get();

    $clean_nodes = array();
    foreach ($nodes as $key => $node) {
      $clean_node = new stdClass;
      $clean_node->nid = $node->nid;
      $clean_node->title = $node->title;
      $clean_node->field_paq_texto_introductorio_value = $node->field_paq_texto_introductorio_value;
      $clean_node->field_paquete_precio_value = $node->field_paquete_precio_value;
      $clean_node->field_paquete_duracion_value = $node->field_paquete_duracion_value;
      $clean_node->field_lugar_tid = $this->getPlaces($clean_node->nid);
      $clean_node->field_actividades_tid = $this->getActivities($clean_node->nid);
      $clean_node->field_intereses_tid = $this->getIntereses($clean_node->nid);
      $clean_node->field_con_quien_se_puede_viajar_tid = $this->getTravelWith($clean_node->nid);
      $clean_node->field_path_image_cache_271x182_value = $node->field_path_image_cache_271x182_value;
      $clean_nodes[] = $clean_node;
    }


    return $clean_nodes;
  }

  public function allHotels($language) {
  $nodes = Node::join('field_data_field_paquete_precio', 'node.nid', '=',
      'field_data_field_paquete_precio.entity_id')
      ->where('node.language', $language)
      ->where('node.type', 'hotel');

    $nodes = $nodes->join('field_data_field_lugar', 'node.nid', '=',
      'field_data_field_lugar.entity_id');

    $nodes = $nodes->join('taxonomy_term_data', 'field_data_field_lugar.field_lugar_tid', '=',
      'taxonomy_term_data.tid');
    $nodes = $nodes->join('field_data_field_hotel_tipo', 'node.nid', '=',
      'field_data_field_hotel_tipo.entity_id');
    $nodes = $nodes->join('field_data_field_paq_texto_introductorio', 'node.nid', '=',
      'field_data_field_paq_texto_introductorio.entity_id');
    $nodes = $nodes->join('field_data_field_path_image_cache_271x182', 'node.nid', '=',
      'field_data_field_path_image_cache_271x182.entity_id');
    $nodes = $nodes->leftJoin('votingapi_vote', 'node.nid', '=',
      'votingapi_vote.entity_id');

    $nodes = $nodes->remember(5)->distinct()->get();
    return $nodes;
  }

  private function getActivities($nid) {
    $field = FieldActividades::where('entity_id', $nid);
    $fields = $field->remember(5)->distinct()->get();

    $return = array();

    foreach ($fields as $field) {
      $return[] = $field->field_actividades_tid;
    }

    return $return;
  }

  private function getIntereses($nid) {
    $field = FieldIntereses::where('entity_id', $nid);
    $fields = $field->remember(5)->distinct()->get();

    $return = array();

    foreach ($fields as $field) {
      $return[] = $field->field_intereses_tid;
    }

    return $return;
  }

  private function getTravelWith($nid) {
    $field = FieldTravelWith::where('entity_id', $nid);
    $fields = $field->remember(5)->distinct()->get();

    $return = array();

    foreach ($fields as $field) {
      $return[] = $field->field_con_quien_se_puede_viajar_tid;
    }

    return $return;
  }

    private function getPlaces($nid) {
        $field = FieldLugaresMultiples::where('entity_id', $nid);
        $fields = $field->remember(5)->distinct()->get();

        $return = array();

        foreach ($fields as $field) {
            $return[] = $field->field_lugares_multiples_tid;
        }

        return $return;
    }
}
