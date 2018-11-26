<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = true;

    protected $casts      =[

        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    protected $fillable = [

        'article_id',
        'user_id',
        'comments',
    ];

    function articles(){

        return $this->belongsTo(Article::class);
    }

    function users(){

        return $this->belongsTo(User::class);
    }
}
