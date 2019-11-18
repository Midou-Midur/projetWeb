@extends('layouts.homeLayout')

@section('seo')
<meta name="description" content="Liste des évènements publiés avec liens pour ajouter des photos et les commenter lorsqu'elles sont passées, réservée aux étudiants du CESI connectés.">
<title>Evènements | Site du BDE</title>
@endsection

@section('content')
<div class="container">
	<div class="row justify-content-center">
		@foreach($events as $event)
			<div class="card">
				<div class="card-header">
					<h3>{{ $event->event_name }}</h3>
				</div>
				<div class="card-header">
					<h4>Catégorie {{ $event->event_type }}</h4>
				</div>
				<div class="card-body">
					<p>{{ $event->event_desc }}</p>
				</div>
				<div class="card-footer">
					<h4>{{ $event->event_price }}</h4><br><br>
					<button type="link" class="btn btn-primary">En savoir plus</button>
					<button type="link" class="btn btn-primary">S'inscrire</button>
				</div>
			</div>
		@endforeach
	</div> 
</div>
@endsection 