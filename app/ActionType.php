<?php

namespace App;

use App\Action;
use Illuminate\Database\Eloquent\Model;

class ActionType extends Model
{

    protected $fillable = [ 'name', 'icon_class' ];

	public $timestamps = false;

    public function actions() {
    	return $this->hasMany('App\Action');
    }
}
