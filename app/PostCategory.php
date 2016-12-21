<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $fillable = ['post', 'category'];

    public $timestamps = false;
}
