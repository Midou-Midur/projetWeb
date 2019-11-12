<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventsModel extends Model
{
    protected $fillable=['event_name', 'event_desc', 'event_date', 'event_price'];
    protected $hidden=['isPublic', 'isCurrent', 'isRecurrent'];
}
