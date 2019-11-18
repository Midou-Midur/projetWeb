<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function voirFormulaire(){ //retourne la vue du formulaire de connexion
    	return view('pages.login');
    }

    public function traitement(){      // authentifie l'utilisateur
    	request()->validate([
    		'email' => ['required', 'email'],
    		'password' => ['required'],
    	]);

    	$resultat = auth()->attempt([  // vérifie si le contenu des inputs est identique à ce qui est inscrit dans la BDD
    		'email' => request('email'),
    		'password' => request('password'),
    	]);

    	if($resultat){
    	return view('pages.account');
    	}

    	return back()->withInput()->withErrors(['name' => 'Votre identifiant est incorrect', ]);
    }

    public function logout(){   //déconnexion
        auth()->logout();
        return view('pages.login')->with('success', 'Vous vous êtes déconnecté');
    }
}
