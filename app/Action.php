<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    public function actions() {
    	return $this->hasOne('App\ActionType');
    }

}
