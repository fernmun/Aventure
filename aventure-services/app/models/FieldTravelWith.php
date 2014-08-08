<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class FieldTravelWith extends Eloquent {
  protected $table = 'field_data_field_con_quien_se_puede_viajar';
  public function node()
  {
    return $this->belongsTo('Node', 'nid');
  }
}
