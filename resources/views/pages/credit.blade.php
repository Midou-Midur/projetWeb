@extends('layouts.homeLayout')
<title>Crédit</title>
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

    <div class="grid-container-profile">
        <div class="grid-item-profile">
            <div class="text">PhpStorm</div>
            <div><img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fblog.jetbrains.com%2Fphpstorm%2Ffiles%2F2015%2F12%2FPhpStorm_400x400_Twitter_logo_white.png&f=1&nofb=1" height="200" width="200" alt="Alt text" /></div>

        </div>
        <div class="grid-item-profile">
            <div class="text">Discord</div>
            <div><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.H8c-Zle5AyPzmAt98ZKqYwHaEr%26pid%3DApi&f=1" height="200" width="200"/></div>

        </div>

        <div class="grid-item-profile">
            <div class="text">Github</div>
            <div><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.ytimg.com%2Fvi%2FOEGm7LXAN_c%2Fmaxresdefault.jpg&f=1&nofb=1" height="200" width="200"/></div>

        </div>
        <div class="grid-item-profile">
            <div class="text">Teams</div>
            <div><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn.cursor.org%2Fbase%2F7d2%2F65a%2Fa71%2F1611-938-microsoft-teams-rival-slack.jpg&f=1&nofb=1" height="200" width="200"/></div>

        </div>
    </div>
    <div class="grid-container-profile">
        <div class="grid-item-profile">

            <div><img src="{{ asset('img/v_bachar_1505479738707-jpg.png') }}" height="200" width="150" alt="Alt text" /></div>
            <div class="text">Enzo BACHAR</div>
        </div>
        <div class="grid-item-profile">
            <div><img src="{{ asset('img/v_bouillon_1536827993397-jpg.png') }}" height="200" width="150"/></div>
            <div class="text">Hugo BOUILLON</div>
        </div>

        <div class="grid-item-profile">
            <div><img src="{{ asset('img/v_wintzenrieth_1505481285027-jpg.png') }}" height="200" width="150"/></div>
            <div class="text">Stephen WINTZENRIETH</div>
        </div>
        <div class="grid-item-profile">
            <div><img src="{{ asset('img/v_slaoui_1536829589846-jpg.png') }}" height="200" width="150"/></div>
            <div class="text">Medhi SLAOUI</div>
        </div>
    </div>
@endsection
