<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    // 更新不可能な値
    protected $guarded = ['id'];

    protected $hidden = [
        'password',
    ];

    // 型キャスト
    protected $casts = [
        'is_deleted' => 'boolean',
    ];

    public function profile()
    {
        return $this->hasOne('App\Models\Profile');
    }

    public function profileDetail()
    {
        return $this->hasOne('App\Models\ProfileDetail');
    }

    public function chatrooms()
    {
        return $this->belongsToMany('App\Models\Chatroom');
    }

    public function follows()
    {
        return $this->hasMany('App\Models\Follow');
    }

    public function followers()
    {
        return $this->hasMany('App\Models\Follow', 'follow_user_id');
    }
}
