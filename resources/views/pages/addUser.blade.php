@extends('layouts.homeLayout')

@section('seo')
<meta name="description=" content="Page d'inscription au Bureau des Etudiants du CESI en tant qu'étudiant, membre du BDE ou personnel du CESI">
<title>Inscription | Site du BDE</title>
@endsection

@section('content')
	<div class="container-fluid">
		<div class="card">
			<div class="card-body">
				<form method="POST">
					@csrf
					<div class="form-group row">
						<label for="name" class="col-md-4 col-form-label text-md-right">Entrez votre nom</label>
						<div class="col-md-6">
							<input class="form" name="name" type="text" placeholder="Nom de famille">
								@if($errors->has('name'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif
						</div>
					</div>
					<div class="form-group row">
						<label for="first_name" class="col-md-4 col-form-label text-md-right">Entrez votre prénom</label>
						<div class="col-md-6">
							<input class="form" name="first_name" type="text" placeholder="Prénom">
								@if($errors->has('first_name'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('first_name') }}</strong>
									</span>
								@endif
						</div>
					</div>
					<div class="form-group row">
						<label for="name" class="col-md-4 col-form-label text-md-right">Entrez votre adresse email</label>
						<div class="col-md-6">
							<input class="form" name="email" type="email" placeholder="Adresse email">
								@if($errors->has('email'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
						</div>
					</div>
					<div class="form-group row">
						<label for="name" class="col-md-4 col-form-label text-md-right">Indiquez à quel campus vous appartenez</label>
						<div class="col-md-6">
							<select name="campus">
								<option value="Aix-en-Provence">Aix-en-Provence</option>
								<option value="Alger">Alger</option>
								<option value="Angoulême">Angoulême</option>
								<option value="Arras">Arras</option>
								<option value="Bordeaux">Bordeaux</option>
								<option value="Brest">Brest</option>
								<option value="Caen">Caen</option>
								<option value="Châteauroux">Châteauroux</option>
								<option value="Dijon">Dijon</option>
								<option value="Douala">Douala</option>
								<option value="Grenoble">Grenoble</option>
								<option value="La Rochelle">La Rochelle</option>
								<option value="Le Mans">Le Mans</option>
								<option value="Lille">Lille</option>
								<option value="Lyon">Lyon</option>
								<option value="Montpellier">Montpellier</option>
								<option value="Nancy">Nancy</option>
								<option value="Nantes">Nantes</option>
								<option value="Oran">Oran</option>
								<option value="Orléans">Orléans</option>
								<option value="Paris-Nanterre">Paris-Nanterre</option>
								<option value="Pau">Pau</option>
								<option value="Rouen">Rouen</option>
								<option value="St-Nazaire">St-Nazaire</option>
								<option value="Strasbourg">Strasbourg</option>
								<option value="Toulouse">Toulouse</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="role" class="col-md-4 col-form-label text-md-right">Indiquez votre statut</label>
						<div class="col-md-6">
							
								<input name="role" type="radio" value="Etudiant"><p>Etudiant</p>
								<input name="role" type="radio" value="BDE"><p>Membre du BDE</p>
								<input name="role" type="radio" value="CESI"><p>Personnel CESI</p>
							
						</div>
					</div>
					<div class="form-group row">
						<label for="password" class="col-md-4 col-form-label text-md-right">Entrez votre mot de passe</label>
						
						<div class="col-md-6">
							<input class="form" name="password" type="password" placeholder="Mot de passe">
								@if($errors->has('password'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
							<p><strong>Votre mot de passe doit contenir au moins une lettre majuscule et un chiffre.</strong></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="name" class="col-md-4 col-form-label text-md-right">Confirmez votre mot de passe</label>
						<div class="col-md-6">
							<input class="form" name="password_confirmation" type="password" placeholder="Retapez le mot de passe">
								@if($errors->has('password_confirmation'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('password_confirmation') }}</strong>
									</span>
								@endif
						</div>
					</div>
					<div class="form-group row">
						<label for="condition" class="col-md-4 col-form-label text-md-right">J'accepte les conditions du règlement concernant le stockage de mes données personnelles et de mon droit à l'oubli.</label> 
						<div class="col-md-6">
								<input class="form" name="condition" type="checkbox"><p class="col-md-4 col-form-label text-md-right">
								<p>Pour plus d'informations, voir les <a href="{{ route('pages.legal') }}">mentions légales</a>.</p>
						</div>
					</div>
					<div class="form-group row mb-O">
						<button type="submit" class="btn btn-primary">Inscription</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection