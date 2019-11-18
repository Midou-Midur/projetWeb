@extends('layouts.homeLayout')
<title>A Propos</title>
@section('inheader')

    <meta charset="UTF-8">
    <link rel="stylesheet" href=" {{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection
@section('Content')
    <h2 class="neutre">Qui sommes-nous?</h2>
    <p class="neutre">
        Le BDE du Cesi Strasbourg est une association à but non lucratif qui a pour objectif de promouvoir la vie étudiante à Strasbourg et au sein de son campus.
    </p>

    <h2 class="neutre">L'équipe</h2>

    <div class="grid-container-profile">
        <div class="grid-item-profile">
            <div><img src="../../img/v_bachar_1505479738707-jpg.png" height="200" width="150" alt="Alt text" /></div>
            <div class="text">Enzo BACHAR</div>
        </div>
        <div class="grid-item-profile">
            <div><img src="../../img/v_bouillon_1536827993397-jpg.png" height="200" width="150"/></div>
            <div class="text">Hugo BOUILLON</div>
        </div>

        <div class="grid-item-profile">
            <div><img src="../../img/v_wintzenrieth_1505481285027-jpg.png" height="200" width="150"/></div>
            <div class="text">Stephen WINTZENRIETH</div>
        </div>
        <div class="grid-item-profile">
            <div><img src="../../img/v_slaoui_1536829589846-jpg.png" height="200" width="150"/></div>
            <div class="text">Medhi SLAOUI</div>
        </div>
    </div>






    <div class="containerfooter">
        <footer class="grid-container-footer">
            <div id="footer" class="#grid-item-footer">
                <a href="{{route('pages.legal')}}">Conditions générales de vente</a>
            </div>
            <div id="footer" class="#grid-item-footer">
                <a href="#"> Carte Campus </a>
            </div>
            <div id="footer" class="#grid-item-footer">
                <a href="#">Crédits </a>
            </div>
            <div id="footer" class="#grid-item-footer">
                <a href="#">Contactez-nous</a>
            </div>
            <div id="footer" class="#grid-item-footer">
                <a href="{{route('pages.legal')}}">  Mentions légales</a>
            </div>
        </footer>
    </div>
@endsection

