<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProfileDetail extends Model
{
    protected $table = 'profile_details';

    protected function user()
    {
        return $this->belongsTo('App\Model\User');
    }
}
