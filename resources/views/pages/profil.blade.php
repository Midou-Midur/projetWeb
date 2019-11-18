@extends('layouts.homeLayout')
<title>Profil</title>
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

    <div class="managementcontainer col-lg-12">
        <h2 id="MyaccountTitle">Votre espace</h2>
        <div class="grid-container-Myaccount">
            <div class="grid-item-Myaccount">
                <h4>
                    Nom
                </h4>
                <h5 id="MyaccountLastName">
                    Wintzenrieth
                </h5>
            </div>

            <div class="grid-item-Myaccount">
                <h4>
                    Prénom
                </h4>
                <h5 id="MyaccountName">
                    Stephen
                </h5>
            </div>

            <div class="grid-item-Myaccount">
                <h4>
                    E-mail
                </h4>
                <h5 id="MyaccounEmail">
                    Stephen.wintzenrieth@viacesi.fr
                </h5>

            </div>
        </div>
        <div class="grid-container-Myaccount">
            <div class="grid-item-Myaccount">
            </div>

            <div class="grid-item-Myaccount">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-lg btn-block">
                        <input type="radio" name="options" id="LookCArt" autocomplete="off">Voir mon panier
                    </label>
                    <button class="btn btn-lg btn-block" type="radio" onclick="toggle_text('formsModif');" id="Modification">Modification</button>
                </div>
            </div>
        </div>
    </div>
    <span id="formsModif" style="display: none">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-8">
                        <div class="card bg-light" style="width: auto; font-size: 16px;">
                            <div class="card-header">Voici votre compte @auth <?php $user=Auth::user(); echo $user->email; ?> @endauth </div>
                            <div class="card-body">
                                <form method="POST" action="mdpModif">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="mdp" class="col-md-4 col-form-label text-md-right">Votre nouveau mot de passe</label>
                                        <div class="col-md-6">
                                            <input class="form" name="mdp_modif" type="password" placeholder="Nouveau mdp">
                                            @if($errors->has('mdp'))
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('mdp')}}</strong>
                                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="mdp_confirm" class="col-md-4 col-form-label text-md-right">Confirmation du nouveau mot de passe</label>
                                        <div class="col-md-6">
                                            <input class="form" name="mdp_modif_confirm" type="password" placeholder="Nouveau mdp">
                                            @if($errors->has('mdp_confirm'))
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('mdp_confirm')}}</strong>
                                                    </span>
                                            @endif
                                            <button type="submit" class="btn btn-warning">Modifier</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </span>
    <script type="text/javascript">
        function toggle_text(id) {
            var span = document.getElementById(id);
            if(span.style.display == "none") {
                span.style.display = "inline";
            } else {
                span.style.display = "none";
            }
        }
    </script>
    @endsection


