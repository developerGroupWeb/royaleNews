<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = true;

    protected $casts      =[

        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    protected $fillable = [

        'name',
        'surname',
        'email',
        'password',
        'civility',
        'news',
        'partner'
    ];

    function comments(){

        return $this->hasMany(Comment::class);
    }
}
