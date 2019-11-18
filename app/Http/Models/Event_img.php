<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event_img extends Model
{
    public $timestamps = false;
    
    protected $fillable = ['event_img_name', 'event_id', 'isPublic'];
    
    public function event(){
        return $this->belongsTo('App\Models\Event');
    }
    
    public function comments(){
        return $this->hasMany('App\Models\Comment');
    }
}
