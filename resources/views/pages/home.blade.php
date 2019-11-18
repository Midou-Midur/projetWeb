@extends('layouts.homeLayout')
<title>Accueil</title>
@section('inheader')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href=" {{ asset('css/styles.css') }}">
    <title>template du sauveur</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="https://blackrockdigital.github.io/startbootstrap-simple-sidebar/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://blackrockdigital.github.io/startbootstrap-simple-sidebar/css/simple-sidebar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    @endsection
@section('Content')
    <div class="alert alert-secondary alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">Accepter</button>
        Le site du BDE utilise des cookies, si vous continuer à naviguer sur le site, vous devez acceptez l'utilisation de cookies.
    </div>

            <!-- Carousel -->
            <div class="container-fluid">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <!-- Indicators/Nombre d'élements du carousel -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/event1.jpg')}}" alt="after" width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/event2.png')}}" alt="exialan" width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/event3.jpg')}}" alt="lanparty" width="1100" height="500">
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                    <a class="carousel-control-next" href="#demo" data-slide="next"><span class="carousel-control-next-icon"></span></a>
                </div>
            </div>


            <br>
            <br>
            <div style="border: 4px solid black">
                <strong><h4 style="text-align: center; text-decoration: underline">Voici ci-dessous nos meilleures ventes</h4></strong>
                <br>
                <div class="row">
                    <div class="col -lg-9 -md-8 -sm-7">
                        <img src="{{ asset('img/event1.jpg')}}" alt="after" style="width: 75%">
                    </div>
                    <div class="col -lg-2 -md-2 -sm-3">
                        <img src="{{ asset('img/event2.png')}}" alt="after" style="width: 75%">
                    </div>
                    <div class="col -lg-1 -md-2 -sm-2">
                        <img src="{{ asset('img/event3.jpg')}}" alt="after" style="width: 75%">
                    </div>
                </div>
                <strong>
                    <a href="{{route('pages.boutique')}}"><p style="text-align: center; text-decoration: underline;"> Voir plus dans la boutique</p></a>
                </strong>

            </div>

@endsection






