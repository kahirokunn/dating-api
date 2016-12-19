<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatroomMessage extends Model
{
    protected $table = 'chatroom_messages';

    protected function chatroom()
    {
        return $this->belongsTo('App\Models\Chatroom');
    }
}
