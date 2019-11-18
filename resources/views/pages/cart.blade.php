@extends('layouts.homeLayout')

@section('seo')
<meta name="description" content="Liste des articles présents dans le panier de l'utilisateur connecté, avec la possibilité de valider la commande.">
<title>Panier de {{ Auth::user()->name}} | Site du BDE</title>
@endsection

@section('content')
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Contenu du panier</h2>
		</div>
		<div class="card-body">
			<table>
			@foreach($carts as $cart)
				<tr>
					<td width="66%">{{ $cart->article_name }}</td> 
					<td width="33%">{{ $cart->article_price }}€</td>
					<td width="33%"><button id="delete-btn" class="btn btn-danger delete-link" value="{{ $cart->id }}">Retirer</button></td>
				</tr>
			@endforeach
			</table>
		</div>
		<div class="card-footer">
			<h2 style="text-decoration: underline;"> Total à payer: {{ $total }} €</h2>
			<form method="POST" action="{{ route('validation') }}">
				@csrf
			<button type="submit" class="btn btn-primary" role="button">Valider la commande</button>
			</form>
		</div>
	</div>
</div>
@endsection
