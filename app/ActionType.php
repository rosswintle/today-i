<?php

namespace App;

use App\Action;
use Illuminate\Database\Eloquent\Model;

class ActionType extends Model
{

	public $timestamps = false;

    public function actions() {
    	return $this->hasMany('App\Action');
    }
}
