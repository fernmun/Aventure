<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class FieldLugaresMultiples extends Eloquent {
    protected $table = 'field_data_field_lugares_multiples';
    public function node()
    {
        return $this->belongsTo('Node', 'nid');
    }
}
