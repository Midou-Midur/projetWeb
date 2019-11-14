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
      <link rel="stylesheet" href="../../fontawesome/css/styles.css">
      <style>
      /* Make the image fully responsive */
      .carousel-inner img
      {
        width: 100%;
        height: 100%;
      }
      .bdeback
      {
        background: linear-gradient(rgba(255,255,255,.5), rgba(255,255,255,.5)), url(../resources/img/logo_bde.png) no-repeat;
        opacity: inherit;
        position: absolute;
        margin-left: auto;
        margin-right: auto;
      }
      p_id
      {
        color: white;
      }
      #p_id:hover
      {
        color: yellow;
      }
    </style>
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
      @yield('contentBeforeSidebar')
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
        <!-- Carousel -->
        <div class="container-fluid" style="width: 50%; height: 50%">
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
                <img src="../../img/event1.jpg" alt="after" width="1100" height="500">
              </div>
              <div class="carousel-item">
                <img src="../../img/event2.png" alt="exialan" width="1100" height="500">
              </div>
              <div class="carousel-item">
                <img src="../../img/event3.jpg" alt="lanparty" width="1100" height="500">
              </div>
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
            <a class="carousel-control-next" href="#demo" data-slide="next"><span class="carousel-control-next-icon"></span></a>
          </div>
        </div>
        @yield('contentBeforeCarousel')
        <br>
        <br>
        <br>
        <div style="border: 4px solid black">
          <strong><h4 style="text-align: center; text-decoration: underline">Voici ci-dessous nos meilleures ventes</h4></strong>
          <br>
          <div class="row">
            <div class="col -lg-9 -md-8 -sm-7">
              <img src="../../img/event1.jpg" alt="after" style="width: 75%">
            </div>
            <div class="col -lg-2 -md-2 -sm-3">
              <img src="../../img/event3.jpg" alt="after" style="width: 75%">
            </div>
            <div class="col -lg-1 -md-2 -sm-2">
              <img src="../../img/event1.jpg" alt="after" style="width: 75%">
            </div>
          </div>
          <br>
          <strong>
            <a href="#"><p style="text-align: center; text-decoration: underline;"> Voir plus dans la boutique</p></a>
          </strong>
        </div>
        <br>
        <br>
        <br>
        @yield('contentUnderBestSold')
        <div style="border: 1px solid black">
          <footer style="position: absolute; background-color: black; color: white; width: 100%">
            <p id="p_id" class="#p_id" style="color: red; text-align: center;" >
              <a href="#">Conditions générales de vente</a>
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
          @yield('contentBeforeFooter')
        </div>
      </div>
    </div>
    @yield('homePage')
  </body>
</html>
