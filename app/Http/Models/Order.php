<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['cart_id', 'article_id'];
    
    public function cart(){
        return $this->belongsTo('App\Models\Cart');
    }
}
