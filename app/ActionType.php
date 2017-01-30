<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActionType extends Model
{
    public function actions() {
    	return $this->hasMany('App\Action');
    }
}
