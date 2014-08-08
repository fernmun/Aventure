<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class FieldIntereses extends Eloquent {
  protected $table = 'field_data_field_intereses';
  public function node()
  {
    return $this->belongsTo('Node', 'nid');
  }
}