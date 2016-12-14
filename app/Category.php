<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Category extends Authenticatable
{
    protected $fillable = [
        'name'
    ];

    // protected $table = 'categories';
}
