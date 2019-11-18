@extends ('layouts.homeLayout')

@section('seo')
<meta name="description" content="Liste des articles de la boutique du BDE, disponibles pour tous les visiteurs du site.">
<title>Boutique | Site du BDE</title>
@endsection

@section('content')
<div class="mainboutique">
    <div class="row">
        <div class="col-xs-3 col-xs-10 menufilter ">
            <div class="contentMenu">
                <input type="search" name="recherche" placeholder="Rechercher" id="input" class="form-control" value="" required="required" title="">
            </div>
            <div class="contentMenu">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButtonCategorie" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Catégorie
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Vetements</a>
                        <a class="dropdown-item" href="#">Goodies</a>
                    </div>
                </div>
            </div>

            <div class="contentMenu">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButtonArticle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Articles
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Stylos</a>
                        <a class="dropdown-item" href="#">Pull</a>
                        <a class="dropdown-item" href="#">Tasse</a>
                    </div>
                </div>
            </div>

            <div class="contentMenu">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButtonFiltre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Filtrer par :
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Prix croissant</a>
                        <a class="dropdown-item" href="#">Prix décroissant</a>
                    </div>
                </div>
            </div>

            <div class="contentMenu">
                <button type="button">Rechercher</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="articlepart col-xs-7">
            <div class="grid-container-article">
                @foreach($articles as $article)
                <div class="grid-item-article">
                    <div>
                        <img src="{{ asset('img/'.$article->article_img) }}" height="200" width="250"/>
                        <h3>{{ $article->article_name}}</h3>
                        <h4>
                            Prix : {{ $article->article_price }} €
                        </h4>
                    </div>
                    <p>{{ $article->article_desc }}</p>
                    <div>
                        <button class="btn btn-lg btn-block">
                            <a href="">Voir plus</a>
                        </button>
                        <form method="POST" action="{{ route('addToCart') }}">
                            @csrf
                            <input type="hidden" class="form-control" name="user_id" value="<?php $user = Auth::user(); echo $user->id; ?>">
                            <input type="hidden" class="form-control" name="article_id" value="{{ $article->id }}">
                            <button type="submit" class="btn btn-lg btn-block btn-primary">Ajouter au panier</button>
                        </form> 
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection