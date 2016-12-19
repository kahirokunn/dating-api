<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected function user()
    {
        return $this->belongsTo('App\Model\User');
    }
}
