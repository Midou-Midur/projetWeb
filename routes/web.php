<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//dev
use App\Http\Controller\AProposController;
use App\Http\Controller\BoutiqueController;
use App\Http\Controller\pastEventController;
use App\Http\Controller\currentEventController;


//Management et respect des règles
use App\Http\Controller\cgvController;
use App\Http\Controller\contactController;
use App\Http\Controller\creditController;
use App\Http\Controller\profilController;
use App\Http\Controller\legalController;

/*
Pour y accéder depuis le navigateur :
http://localhost/ProjetWebA2/public/
*/
Route::get('/', function () {
    return view('pages.home');
})->name('pages.home');


//Modération

Route::get('/pages/Management', function(){
    return view('pages.Management');
})->name('pages.Management');

//Events
Route::get('/pages/currentEvent', function(){
    return view('pages.currentEvent');
})->name('pages.currentEvent');

Route::get('/pages/boutique', function(){
    return view('pages.boutique');
})->name('pages.boutique');

//Juridique
Route::get('/pages/aPropos', function(){
    return view('pages.aPropos');
})->name('pages.aPropos');

Route::get('/pages/legal', function(){
    return view('pages.legal');
})->name('pages.legal');

Route::get('/pages/cgv', function(){
    return view('pages.cgv');
})->name('pages.cgv');

Route::get('/pages/carteCampus', function(){
    return view('pages.carteCampus');
})->name('pages.carteCampus');

Route::get('/pages/credit', function(){
    return view('pages.credit');
})->name('pages.credit');

//Relatif au compte

Route::get('/pages/profil', function(){
return view('pages.Profil');
})->name('pages.Profil');

