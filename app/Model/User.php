<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $visible = [
        'id','name','email',
    ];

    protected $table = "users";

    public function profile()
    {
       return $this->hasOne('App\Model\Profile');
    }

    public function message()
    {
       return $this->hasMany('App\Model\ChatroomMessage');
    }

    public function chatroom()
    {
       return $this->belongsToMany('App\Model\Chatroom');
    }

    public function appointment()
    {
       return $this->belongsToMany('App\Model\Appointment');
    }
}
