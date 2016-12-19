<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ChatroomMessage extends Model
{
    protected $table = 'chatroom_messages';

    protected function chatroom()
    {
        return $this->belongsTo('App\Model\Chatroom');
    }
}
