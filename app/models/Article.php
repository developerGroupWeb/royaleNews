<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $timestamps = false;

    protected $casts      =[
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
