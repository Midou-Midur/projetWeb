<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCart() //montre le contenu du panier
    {
        if(auth()->check() && Auth::user()->role = 'BDE' || Auth::user()->role = 'Etudiant'){
            $carts = DB::table('cart')->join('articles', 'cart.article_id', '=', 'articles.id')->get();
            $total = DB::table('cart')->join('articles', 'articles.id', '=', 'cart.article_id')->sum('articles.article_price');
            
            
            return view('pages.cart', compact('carts', 'total'));
        }

        return view('pages.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addToCart(Request $request) //Ajoute un article au panier
    {
        if (auth()->guest())
            {
                return view('pages.login')->with('error', 'Accès refusé');
                
            }
                $cart = new \App\Models\Cart;

                $cart->user_id = request('user_id');
                $cart->article_id = request('article_id');

                $cart = \App\Models\Cart::create([
                    'article_id' => request('article_id'),
                    'user_id' => request('user_id'),  ]);
        
                return back();
    }
        
    /**
     * Display the specified resource.
     *
     * @param  \App\cartsModel  $cartsModel
     * @return \Illuminate\Http\Response
     */
    public function show(cartsModel $cartsModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cartsModel  $cartsModel
     * @return \Illuminate\Http\Response
     */
    public function edit(cartsModel $cartsModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cartsModel  $cartsModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cartsModel $cartsModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cartsModel  $cartsModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(cartsModel $cartsModel)
    {
        //
    }
}
