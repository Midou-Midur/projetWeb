@extends('layouts.homeLayout')

@section('seo')
<meta name="description" content="Page de création des évènements & manifestations, réservée aux membres du BDE.">
<title>Ajout d'un évènement | Site du BDE</title>
@endsection

@section('content')
	<div class="container-fluid">
		<div class="card">
			<div class="card-body">
				<form action="" method="POST">
					@csrf
					<div class="form-group row">
						<label for="event_name" class="col-md-4 col-form-label text-md-right">Entrez le nom de l'évènement</label>
						<div class="col-md-6">
							<input class="form" name="event_name" type="text" placeholder="Nom">
								@if($errors->has('event_name'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('event_name') }}</strong>
									</span>
								@endif
						</div>
					</div>
					<div class="form-group row">
						<label for="event_desc" class="col-md-4 col-form-label text-md-right">Donnez une description pour cet évènement</label>
						<div class="col-md-6">
							<textarea name="event_desc" type="text" placeholder="Description"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label for="event_date" class="col-md-4 col-form-label text-md-right">Indiquez la date de l'evènement</label>
						<div class="col-md-6">
							<input class="form" name="event_date" type="date">
						</div>
					</div>
					<div class="form-group row">
						<label for="event_type" class="col-md-4 col-form-label text-md-right">Donnez le type d'évènement</label>
						<div class="col-md-6">
							<input class="form" name="event_type" type="text">
							@if($errors->has('event_type'))
								<span clas="invalid-feedback" role="alert">
									<strong>{{ $errors->first('event_desc') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<div class="form-group row">
						<label for="event_price" class="col-md-4 col-form-label text-md-right">Donnez un prix d'entrée à cet évènement (si c'est gratuit, mettez 0)</label>
						<div class="col-md-6">
							<input class="form" name="event_price" type="number" step="0.01">
						</div>
					</div>
					<div class="form-group row">
						<label for="isRecurrent" class="col-md-4 col-form-label text-md-right">Indiquez si l'évènement est ponctuel (n'arrivera qu'une fois) ou récurrent (quotidien, hebdomadaire, mensuel, trimestriel)</label>
						<div class="col-md-6">
							<input type="radio" value="0" name="isRecurrent"><p> Ponctuel</p>
							<input type="radio" value="1" name="isRecurrent"><p> Récurrent</p>
						</div>
								
					</div>
					<div class="form-group row mb-0">
						<button type="submit">Créer</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection