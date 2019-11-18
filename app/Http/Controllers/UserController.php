<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Event;
use App\Models\Article;

use DataTables;

class UserController extends Controller
{
    public function addUser(){ //ajoute un utilisateur dans la table users
        
    	request()->validate([  //validation des parties du formulaire, si un champ n'est pas correct l'utilisateur sera renvoyé vers le même formulaire
    		'condition' => ['required'],
    		'name' => ['required'],
    		'first_name' => ['required'],
    		'email' => ['required', 'email'],
    		'password' => ['required', 'confirmed', 'min:6', 'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/'],
    		'password_confirmation' => ['required'],
    		'campus' => ['required'],
    		'role' => ['required'],
    	]); 
        

    	$user = new \App\Models\User;  //instancie un nouvel utilisateur et associe contenu des inputs aux champs de la table users
		$user->name = request('name');
		$user->first_name = request('first_name');
    	$user->email = request('email');
    	$user->password = request('password');
    	$user->campus = request('campus');
        $user->role = request('role');


		$users = \App\Models\User::create([   //insertion
			'name' => request('name'),
			'first_name' => request('first_name'),
			'email' => request('email'),
			'password' => bcrypt(request('password')),
			'campus' => request('campus'),
            'role' => request('role'),
		]);        

		return view('pages.login')->with('success', 'Vous vous êtes bien inscrit');
    }

    public function accueil(Request $request){  //retourne la vue de la page d'accueil des utilisateurs connectés (account)

    	if (auth()->guest()){
    		return redirect('pages.login')->withInput()->withErrors([
    			'email' => 'Vous devez être connecté pour voir cette page',
    		]);
    	}

        return view('pages.account');

    }

    /*
     * Charge les datatables des évènements et des produits pour que seuls les membres du BDE puissent gérer ces données
     */

    public function dataTableEvents(){
        if(Auth::check() && Auth::user()->role = 'BDE'){

            if($request->ajax()){
                $data = \App\Models\Event::all();
                return Datatables::of($data)->addColumn('actions', function($data){
                    $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
                    $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                    return $button;
                })->rawColumns(['actions'])->make(true);
            }
        }

    }

    public function dataTableArticles(){
        if(Auth::check() && Auth::user()->role = 'BDE'){

            if ($request->ajax()){

                $data2 = \App\Models\Article::all();
                return Datatables::of($data2)->addColumn('actions', function($data2){
                    $button = '<button type="button" name="edit" id="'.$data2->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
                    $button .= '&nbsp;&nbsp;&nbsp;<button type="button" name="edit" id="'.$data2->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                    return $button;
                })->rawColumns(['actions'])->make(true);
            } 
        }
    	
    }

    /*
     * Retourne le formulaire pour ajouter un utilisateur
     */

    public function voirFormulaire(){
        return view('pages.addUser');
    }
}