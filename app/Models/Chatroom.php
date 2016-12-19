<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chatroom extends Model
{
    protected $table = 'chatrooms';

    protected function messages()
    {
        return $this->hasMany('App\Models\ChatroomMessage');
    }

    protected function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
