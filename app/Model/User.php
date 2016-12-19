<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    // 更新可能な値
    protected $fillable = [
        'name', 'email', 'password',
    ];

    // 取得可能な値
    protected $visible = [
        'id', 'name', 'email', 'is_deleted',
    ];

    // 型キャスト
    protected $casts = [
        'is_deleted' => 'boolean',
    ];

    public function profile()
    {
       return $this->hasOne('App\Model\Profile');
    }

    public function profileDetail()
    {
        return $this->hasOne('App\Model\ProfileDetail');
    }

    public function chatrooms()
    {
       return $this->belongsToMany('App\Model\Chatroom');
    }

    public function follows()
    {
       return $this->hasMany('App\Model\Follow');
    }

    public function followers()
    {
       return $this->hasMany('App\Model\Follow', 'follow_user_id');
    }
}
