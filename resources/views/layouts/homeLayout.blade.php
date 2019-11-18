<!DOCTYPE html>
<html lang="en">
  <head>
      @yield('inheader')
  </head>
  <body class="bdeback">
  <!-- TEMPLATE SIDE & NAVBAR :https://blackrockdigital.github.io/startbootstrap-simple-sidebar/-->
  <div class="d-flex " id="wrapper">
      <!-- Sidebar -->
      <div class="bg-light border-right" id="sidebar-wrapper">
          <div class="sidebar-heading">
              <a href="{{route('pages.home')}}"><img src="{{ asset('img/logo_cesi.png') }}" alt="logo_cesi"></a>
          </div>
          <div class="list-group list-group-flush" style="display: inline;">
              <a href="{{route('pages.home')}}" class="list-group-item list-group-item-action bg-light">Accueil</a>
              <a href="{{route('pages.currentEvent')}}" class="list-group-item list-group-item-action bg-light">Evènements</a>
              <a href="{{route('pages.boutique')}}" class="list-group-item list-group-item-action bg-light">Boutique</a>
              <a href="{{route('pages.aPropos')}}" class="list-group-item list-group-item-action bg-light">A propos</a>
              <a href="https://www.facebook.com/BDECESISTRASBOURG/">
                  <img src="{{ asset('img/facebook_brands.jpg') }}" alt="facebook">
              </a>
              <a href="https://discord.gg/YWHudc">
                  <img src="{{ asset('img/discord_brands.png') }}" alt="discord">
              </a>
              <a href="https://twitter.com/CesiStrasbourg">
                  <img src="{{ asset('img/twitter_brands.png') }}" alt="twitter">
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
                      <li class="nav-item"><a class="nav-link" href="{{route('pages.Management')}}">Organisation</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{route('pages.Profil')}}">Profil</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{route('pages.home')}}">Déconnexion</a></li>
                  </ul>
              </div>
          </nav>
<div>
    @yield('Content')
</div>

      </div>
  </div>
@yield('footer')
  <div style="border: 1px solid black">
          <footer style="position: absolute; background-color: black; color: white; width: 100%">
            <div id="p_id" class="#p_id" style="color: red; text-align: center;" >
              <a href="{{route('pages.cgv')}}">Conditions générales de vente</a>
                -
              <a href="{{route('pages.carteCampus')}}"> Carte Campus </a>
               -
              <a href="{{route('pages.credit')}}">Crédits </a>
               -
              <a href="#">  Contactez-nous</a>
               -
              <a href="{{route('pages.cgv')}}">  Mentions légales</a>
            </div>
          </footer>
        </div>

      <!-- /#page-content-wrapper -->
    <!-- /#wrapper -->
    <!-- Bootstrap core JavaScript -->
    <script src="https://blackrockdigital.github.io/startbootstrap-simple-sidebar/vendor/jquery/jquery.min.js"></script>
    <script src="https://blackrockdigital.github.io/startbootstrap-simple-sidebar/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
