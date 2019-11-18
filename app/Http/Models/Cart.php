<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
	
    public $timestamps = false;

    protected $fillable = ['user_id', 'article_id'];
}
