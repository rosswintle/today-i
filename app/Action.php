<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    public function type() {
    	return $this->belongsTo('App\ActionType', 'action_type_id');
    }

}
