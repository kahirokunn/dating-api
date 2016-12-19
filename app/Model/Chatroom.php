<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Chatroom extends Model
{
    protected $table = 'chatrooms';

    protected function messages()
    {
        return $this->hasMany('App\Model\ChatroomMessage');
    }

    protected function users()
    {
        return $this->hasMany('App\Model\User');
    }
}
