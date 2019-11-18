<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $timestamps = false;
    
    protected $fillable=['event_name', 'event_desc', 'event_date', 'event_price', 'isCurrent', 'isRecurrent', 'isPublic'];
    
    public function event_imgs(){
        return $this->hasMany('App\Models\'Event_img');
    }
    
    public function participants(){
        return $this->hasMany('App\Models\Participant');
    }
    
}
