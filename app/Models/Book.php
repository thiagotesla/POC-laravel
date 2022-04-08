<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table='books';

    public function relUsers()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}


