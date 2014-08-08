<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Node extends Eloquent {
  protected $table = 'node';
  protected $primaryKey = 'nid';

  public function paquetePrecio()
  {
    return $this->hasOne('PaquetePrecio', 'entity_id');
  }
}