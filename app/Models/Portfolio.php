<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolios';

    protected function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
