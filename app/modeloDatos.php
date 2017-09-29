<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeloDatos extends Model
{
    protected $fillable = [
        'datos',
    ];

    protected $hidden = [
        'remember_token',
    ];
}
