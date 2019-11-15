@extends('layouts.homeLayout')

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Liste des articles présents dans le panier de l'utilisateur connecté, avec la possibilité de valider la commande.">
    <title>Panier de {{ Auth::user()->name}} | Site du BDE</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

@section('seo')

@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Contenu du panier</h2>
        </div>
        @foreach($carts as $cart)
        <div class="grid-container">
            <div class="grid-item">
                {{ $cart->article_name }}
            </div>
            <div class="grid-item">
                {{ $cart->article_price }}€
            </div>
            <div class="grid-item">
                <button id="delete-btn" class="btn btn-danger delete-link" value="{{ $cart->id }}"><i class=" fas fa-trash"></i></button>
            </div>

        </div>
        @endforeach
        <div class="card-footer">
            <h2 style="text-decoration: underline;"> Total à payer: {{ $total }} €</h2>
            <form method="POST" action="{{ route('validation') }}">
                @csrf
                <button type="submit" class="btn btn-primary" role="button">Valider la commande</a>
        </div>
    </div>
@endsection
