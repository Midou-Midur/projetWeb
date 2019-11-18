@extends('layouts.homeLayout')
<title>Carte Du Campus</title>
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
    <img src ="{{ asset('img/carte_campus.png') }}" width="775" height="630" alt="France" style="position: center">
    <div class="grid-container">
        <div class="grid-item">
            <h2>STRASBOURG</h2>
            <p>
                2 allée des Foulons
                Parc des Tanneries
                BP 50016
                67380 LINGOLSHEIM
            </p>
        </div>

        <div class="grid-item">
            <h2>REIMS</h2>
            <p>
                7 bis avenue Robert Schuman
                51100 REIMS
            </p>
        </div>

        <div class="grid-item">
            <h2>ARRAS</h2>
            <p>
                7 rue Diderot
                62000 ARRAS
            </p>
        </div>

        <div class="grid-item">
            <h2>LILLE</h2>
            <p>
                CESI École d’Ingénieurs
                Campus Arts et Métiers
                8 Bd Louis XIV
                <br>
                <br>
                CESI École Supérieure de l’Alternance et CESI École de Formation des Managers
                Campus SKEMA
                Avenue Willy Brandt
                59777 EURALILLE
                59000 Lille

            </p>
        </div>

        <div class="grid-item">
            <h2>ROUEN</h2>
            <p>
                CESI École d’Ingénieurs
                14 rue Sakharov
                76130 MONT SAINT AIGNAN
                <br><br>
                CESI École Supérieure de l’Alternance et CESI École de Formation des Managers
                1 rue Guglielmo Marconi
                Parc de la Vatine
                76130 MONT SAINT AIGNAN

            </p>
        </div>

        <div class="grid-item">
            <h2>PPARIS NANTERRE</h2>
            <p>
                93 boulevard de La Seine
                CS 40177
                92023 NANTERRE CEDEX
            </p>
        </div>

        <div class="grid-item">
            <h2>CAEN</h2>
            <p>
                Campus II – ESITC Caen
                1 rue Pierre et Marie Curie
                14610 EPRON
            </p>
        </div>

        <div class="grid-item">
            <h2>BREST</h2>
            <p>
                2 avenue de Provence
                29200 BREST

            </p>
        </div>

        <div class="grid-item">
            <h2>LE MANS</h2>
            <p>
                2 allée des Foulons
                Parc des Tanneries
                BP 50016
                67380 LINGOLSHEIM
            </p>
        </div>

        <div class="grid-item">
            <h2>SAINT-NAZAIRE</h2>
            <p>
                Boulevard de l’Université
                44603 SAINT-NAZAIRE
            </p>
        </div>

        <div class="grid-item">
            <h2>NANTES</h2>
            <p>
                1 avenue Augustin Louis Cauchy
                La Chantrerie
                44307 NANTES
            </p>
        </div>

        <div class="grid-item">
            <h2>LA ROCHELLE</h2>
            <p>
                Bâtiment Lab In’Tech
                8 rue Isabelle Autissier
                17140 LAGORD
            </p>
        </div>

        <div class="grid-item">
            <h2>DIJON</h2>
            <p>
                Campus CESI Dijon
                22 B rue du Cap Vert
                21800 QUETIGNY
            </p>
        </div>

        <div class="grid-item">
            <h2>ANGOULEME</h2>
            <p>
                Pôle d’excellence
                40 route de la Croix du Milieu
                16400 LA COURONNE

            </p>
        </div>
    </div>
@endsection
