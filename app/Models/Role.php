<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    protected $fillable = ['role_type'];

    public function user(){
    	return $this->belongsTo('\App\Models\User');
    }
}
