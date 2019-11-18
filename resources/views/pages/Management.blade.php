@extends('layouts.homeLayout')
<title>Gestion</title>
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

    <div class="container">
        <nav class="nav nav-fills nav-justified">

            <a class="nav-item" data-toggle="tab" href="#event">Evenements</a>
            <a class="nav-item" data-toggle="tab" href="#boutique">Boutique</a>

        </nav>


        <div class="tab-content">
            <div id="event" class="tab-pane fade in active">
                <div class="managementcontainer col-lg-12">
                    <div class="grid-container-manacontainer">
                        <div class="grid-item-manacontainer">
                            <img src="../../img/event3.jpg" height="200" width="250"/>
                        </div>

                        <div class="grid-item-manacontainer">
                            <h3>Titre</h3>
                            <h4>
                                Type d'évènement
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>

                        <div class="grid-item-manacontainer">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-lg btn-block">
                                    <input type="radio" name="options" id="option1" autocomplete="off">Modification
                                </label>
                                <label class="btn btn-lg btn-block">
                                    <input type="radio" name="options" id="option2" autocomplete="off">Supression
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="grid-container-manacontainer">
                        <div class="grid-item-manacontainer">
                            <img src="../../img/event3.jpg" height="200" width="250"/>
                        </div>
                        <div class="grid-item-manacontainer">
                            <h3>Titre</h3>
                            <h4>
                                Type d'évènement
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>

                        <div class="grid-item-manacontainer">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-lg btn-block">
                                    <input type="radio" name="options" id="option1" autocomplete="off">Modification
                                </label>
                                <label class="btn btn-lg btn-block">
                                    <input type="radio" name="options" id="option2" autocomplete="off">Supression
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="grid-container-manacontainer">
                        <div class="grid-item-manacontainer">
                            <img src="../../img/event3.jpg" height="200" width="250"/>
                        </div>
                        <div class="grid-item-manacontainer">
                            <h3>Titre</h3>
                            <h4>
                                Type d'évènement
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>

                        <div class="grid-item-manacontainer">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-lg btn-block">
                                    <input type="radio" name="options" id="option1" autocomplete="off">Modification
                                </label>
                                <label class="btn btn-lg btn-block">
                                    <input type="radio" name="options" id="option2" autocomplete="off">Supression
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="grid-container-manacontainer">
                        <div class="grid-item-manacontainer">
                            <img src="../../img/event3.jpg" height="200" width="250"/>
                        </div>
                        <div class="grid-item-manacontainer">
                            <h3>Titre</h3>
                            <h4>
                                Type d'évènement :
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>

                        <div class="grid-item-manacontainer">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-lg btn-block">
                                    <input type="radio" name="options" id="option1" autocomplete="off">Modification
                                </label>
                                <label class="btn btn-lg btn-block">
                                    <input type="radio" name="options" id="option2" autocomplete="off">Supression
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="boutique" class="tab-pane fade in active">
                <div class="managementcontainer col-lg-12">
                    <div class="grid-container-manacontainer">
                        <div class="grid-item-manacontainer">
                            <img src="../../img/event3.jpg" height="200" width="250"/>
                        </div>

                        <div class="grid-item-manacontainer">
                            <h3>Titre</h3>
                            <h4>
                                Type d'évènement
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>

                        <div class="grid-item-manacontainer">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-lg btn-block">
                                    <input type="radio" name="options" id="option1" autocomplete="off">Modification
                                </label>
                                <label class="btn btn-lg btn-block">
                                    <input type="radio" name="options" id="option2" autocomplete="off">Supression
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="grid-container-manacontainer">
                        <div class="grid-item-manacontainer">
                            <img src="../../img/event3.jpg" height="200" width="250"/>
                        </div>
                        <div class="grid-item-manacontainer">
                            <h3>Titre</h3>
                            <h4>
                                Type d'évènement
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>

                        <div class="grid-item-manacontainer">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-lg btn-block">
                                    <input type="radio" name="options" id="option1" autocomplete="off">Modification
                                </label>
                                <label class="btn btn-lg btn-block">
                                    <input type="radio" name="options" id="option2" autocomplete="off">Supression
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="grid-container-manacontainer">
                        <div class="grid-item-manacontainer">
                            <img src="../../img/event3.jpg" height="200" width="250"/>
                        </div>
                        <div class="grid-item-manacontainer">
                            <h3>Titre</h3>
                            <h4>
                                Type d'évènement
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>

                        <div class="grid-item-manacontainer">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-lg btn-block">
                                    <input type="radio" name="options" id="option1" autocomplete="off">Modification
                                </label>
                                <label class="btn btn-lg btn-block">
                                    <input type="radio" name="options" id="option2" autocomplete="off">Supression
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="grid-container-manacontainer">
                        <div class="grid-item-manacontainer">
                            <img src="../../img/event3.jpg" height="200" width="250"/>
                        </div>
                        <div class="grid-item-manacontainer">
                            <h3>Titre</h3>
                            <h4>
                                Type d'évènement :
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>

                        <div class="grid-item-manacontainer">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-lg btn-block">
                                    <input type="radio" name="options" id="option1" autocomplete="off">Modification
                                </label>
                                <label class="btn btn-lg btn-block">
                                    <input type="radio" name="options" id="option2" autocomplete="off">Supression
                                </label>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>
@endsection




