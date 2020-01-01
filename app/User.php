<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    const USER_TYPE_NORMAL = 0;
    const USER_TYPE_ADMIN = 1;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password', 'email_hour', 'email_off', 'twitter_username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function actions()
    {
        return $this->hasMany('App\Action');
    }

    public function isAdmin()
    {
        return $this->user_type == self::USER_TYPE_ADMIN;
    }
}
