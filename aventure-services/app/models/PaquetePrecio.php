<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class PaquetePrecio extends Eloquent {
  protected $table = 'field_data_field_paquete_precio';
  public function node()
  {
    return $this->belongsTo('Node', 'nid');
  }
}