<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPost extends Model
{
    protected $fillable = [
        'content', 'thumbnail', 'active', 'user', 'post'
    ];
}
