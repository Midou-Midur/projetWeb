<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['event_id', 'user_id'];
    
    public function event(){
        return $this->belongsTo('App\Models\Event');
    }
}
