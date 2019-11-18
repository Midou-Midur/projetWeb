<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $timestamps = false;
    
    protected $fillable=['article_name','article_desc', 'article_img', 'article_price', 'article_type', 'nbSold'];
}
