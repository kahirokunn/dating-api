<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
