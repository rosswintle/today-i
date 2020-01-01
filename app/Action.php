<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    protected $casts = [
        'action_time' => 'datetime',
    ];

    public function type()
    {
        return $this->belongsTo(\App\ActionType::class, 'action_type_id');
    }
}
