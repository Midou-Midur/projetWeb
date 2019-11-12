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
//login/out/signIn

//dev
Route::get('/pages/aPropos', 'aProposController');
Route::get('/pages/boutique', 'boutiqueController');
Route::get('/pages/pastEvent', 'pastEventController');
Route::get('/pages/currentEvent', 'currentEventController');
Route::get('/pages/profil', 'profilController');

////Management et respect des règles
Route::get('/pages/cgv', 'cgvController');
Route::get('/pages/contact', 'contactController');
Route::get('/pages/credit', 'creditController');
Route::get('/pages/profil', 'profilController');
Route::get('/pages/legal', function(){
	return View::make('pages.legal')->compact('pages.legal');
})->name('pages.legal');

//test
Route::post('/pages/testArticleForm', function(){
	return View::make('pages.testArticleForm')->compact('pages.testArticleForm');
})->name('pages.testArticleForm');