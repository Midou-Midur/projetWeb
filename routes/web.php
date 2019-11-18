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


Route::get('/', function () {
    return view('pages.home');
})->name('pages.home');

//login/out/signIn
Route::get('/pages/login', 'LoginController@voirFormulaire')->name('pages.login');
Route::post('/pages/login', 'LoginController@traitement');
Route::get('/pages/logout', 'LoginController@logout')->name('pages.logout');


//dev
Route::prefix('pages')->
	group(function(){
		Route::get('aPropos', 'aProposController')->name('pages.aPropos');
		Route::get('boutique', 'ArticleController@index')->name('pages.boutique');
		Route::post('addToCart', 'CartController@addToCart')->name('addToCart');
		Route::get('cart', 'CartController@showCart')->name('cart');
		Route::any('validation', 'MailController@send')->name('validation');


		//Partie login
		Route::get('account', 'UserController@accueil')->name('pages.account');

		//Event
		Route::get('pastEvent', 'pastEventController')->name('pages.pastEvent');
		Route::get('currentEvent', 'currentEventController')->name('pages.currentEvent');
		Route::get('addEvent', 'EventController@voirFormulaire')->name('pages.addEvent');
		Route::post('addEvent', 'EventController@addEvent')->name('pages.addEvent');
		Route::get('events/{id}', 'EventController@index')->name('pages.showEvent');
		Route::get('events', 'EventController@index')->name('pages.events');
		Route::get('eventMgmt', 'EventController@manage')->name('pages.eventMgmt');
		
		//Management et respect des règles
		Route::get('cgv', 'cgvController')->name('pages.cgv');
		Route::get('contact', 'contactController')->name('pages.contact');
		Route::get('credit', 'creditController')->name('pages.credit');
		Route::get('profil', 'profilController')->name('pages.profil');
});

Route::get('pages/addArticle', 'ArticleController@voirFormulaire')->name('pages.addArticle');
Route::post('pages/addArticle', 'ArticleController@create');


Route::get('legal', function(){
		return view('pages.legal');
	})->name('pages.legal');

Route::get('/pages/addUser', 'UserController@voirFormulaire')->name('pages.addUser');
Route::post('/pages/addUser', 'UserController@addUser')->name('pages.addUser');

Route::get('/account/dataTableEvents', 'UserController@dataTableEvents')->name('dataTableEvents');
Route::get('account/dataTableArticles', 'UserController@dataTableArticles')->name('dataTableArticles');
