<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Container\Container;
use Illuminate\Mail\Markdown;
use Illuminate\Support\Facades\DB;
use App\Models\{ Cart, Articles };
use App\Mail\Order;

class MailController extends Controller
{
	public function send(){

	$carts = DB::table('cart')->join('articles', 'cart.article_id', '=', 'articles.id')->get();
    \Mail::to('enzo.bachar@gmail.com')->send(new Order($carts));
    	return view('pages.boutique');
    }
}
