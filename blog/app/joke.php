<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class joke extends Model
{
    //fill 
    protected $fillable = [
        'title',
        'slug',
        'author',
        'body',
        'vote',
    ];
}
