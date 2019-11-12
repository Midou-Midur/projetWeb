<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class articleModel extends Model
{
    protected $fillable=['article_name','article_description', 'article_img', 'article_price', 'article_type', 'nbSold'];
}