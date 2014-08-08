<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class FieldActividades extends Eloquent {
  protected $table = 'field_data_field_actividades';
  public function node()
  {
    return $this->belongsTo('Node', 'nid');
  }
}