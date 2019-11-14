<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>template du sauveur</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="https://blackrockdigital.github.io/startbootstrap-simple-sidebar/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://blackrockdigital.github.io/startbootstrap-simple-sidebar/css/simple-sidebar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="../pages/styles.css">

  </head>
  <body class="bdeback">
    <!-- TEMPLATE SIDE & NAVBAR :https://blackrockdigital.github.io/startbootstrap-simple-sidebar/-->
    <div class="d-flex " id="wrapper">
      <!-- Sidebar -->
      <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">
          <a href="{{route('pages.home')}}"><img src="../resources/img/logo_cesi.png" alt="logo_cesi"></a>
        </div>
        <div class="list-group list-group-flush" style="display: inline;">
          <a href="#" class="list-group-item list-group-item-action bg-light">Accueil</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">Evènements</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">Boutique</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">A propos</a>
          <a href="https://www.facebook.com/BDECESISTRASBOURG/">
            <img src="../../img/facebook_brands.jpg" alt="facebook">
          </a>
          <a href="https://discord.gg/YWHudc">
            <img src="../../img/discord_brands.png" alt="discord">
          </a>
          <a href="https://twitter.com/CesiStrasbourg">
            <img src="../../img/twitter_brands.png" alt="twitter">
          </a>
        </div>
      </div>
      <!-- /#sidebar-wrapper -->
      <!-- Page Content -->
      <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
          <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">Notifications <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item"><a class="nav-link" href="#">Organisation</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Profil</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Déconnexion</a></li>
            </ul>
          </div>
        </nav>
        @yield('contentUnderNavbar')

        <div style="border: 1px solid black">
          <footer class="grid-container-footer">
            <p id="p_id" class="#p_id" style="color: red; text-align: center;" >
              <a href="{{route('pages.legal')}}">Conditions générales de vente</a>
                -
              <a href="#"> Carte Campus </a>
               -
              <a href="#">Crédits </a>
               -
              <a href="#">Contactez-nous</a>
               -
              <a href="{{route('pages.legal')}}">  Mentions légales</a>
            </p>
          </footer>
        </div>
      </div>
    </div>
  </body>
</html>
