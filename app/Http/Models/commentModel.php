<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class commentModel extends Model
{
    public $timestamps = false;
    
    protected $fillable=['event_id', 'user_id', 'content', 'isPublic'] ;
    
    public function event_img(){
        return $this->belongsTo('App\Models\Event_img');
    }
    
}
