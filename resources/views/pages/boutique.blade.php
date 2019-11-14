@extends ('layout.homeLayout')
@section('contentUnderNavbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Boutique</title>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
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
                        Filtrer part :
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

        <div class="articlepart col-xs-7">
            <div class="grid-container-article">
                <div class="grid-item-article">
                    <p>
                    <div>
                        <img src="../../img/event3.jpg" height="200" width="250"/>
                        <h3>Titre</h3>
                        <h4>
                            Prix :
                        </h4>
                    </div>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-lg btn-block">
                            <input type="radio" name="options" id="option1" autocomplete="off"> Voir plus
                        </label>
                        <label class="btn btn-lg btn-block">
                            <input type="radio" name="options" id="option2" autocomplete="off"> Ajouter au panier
                        </label>
                    </div>
                </div>

                <div class="grid-item-article">
                    <p>
                    <div><img src="../../img/event3.jpg" height="200" width="250"/>
                        <h3 >Titre</h3>
                        <h4>
                            Prix :
                        </h4>
                    </div>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-lg btn-block">
                            <input type="radio" name="options" id="option1" autocomplete="off"> Voir plus
                        </label>
                        <label class="btn btn-lg btn-block">
                            <input type="radio" name="options" id="option2" autocomplete="off"> Ajouter au panier
                        </label>
                    </div>
                </div>

                <div class="grid-item-article">
                    <p>
                    <div>
                        <img src="../../img/event3.jpg" height="200" width="250"/>
                        <h3>Titre</h3>
                        <h4>
                            Prix :
                        </h4>
                    </div>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-lg btn-block">
                            <input type="radio" name="options" id="option1" autocomplete="off"> Voir plus
                        </label>
                        <label class="btn btn-lg btn-block">
                            <input type="radio" name="options" id="option2" autocomplete="off"> Ajouter au panier
                        </label>
                    </div>
                </div>

                <div class="grid-item-article">
                    <p>
                    <div>
                        <img src="../../img/event3.jpg" height="200" width="250"/>
                        <h3>Titre</h3>
                        <h4>
                            Prix :
                        </h4>
                    </div>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-lg btn-block">
                            <input type="radio" name="options" id="option1" autocomplete="off"> Voir plus
                        </label>
                        <label class="btn btn-lg btn-block">
                            <input type="radio" name="options" id="option2" autocomplete="off"> Ajouter au panier
                        </label>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>
</body>

</html>
