<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Flushr</title>
    <link rel="stylesheet" property="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>
    <link rel="stylesheet" property="stylesheet" type="text/css" href="css/app.css">
    @yield('head')
  </head>
  <body>
    <div class="container-fluid">
      <div class="navbar row">
        <div class="col-xs-9">
          <div class="row">
            <div class="col-xs-5">
              <div class="title">
                <a href="{{URL::route('index')}}"><img src="img/flushr_logo.jpg" height="70" alt="Flushr"></a>
              </div>
            </div>
            <div class="col-xs-7" id="mainSearchDiv">
              <form method="get" action="search" class="form-inline" id="mainSearch">
                <div class="row">
                  <div class="col-xs-10" id="searchCol">
                    <input type="text" class="form-control controls" autocomplete="on" id="searchMain" name="searchMain" placeholder="Search bathrooms...">
                  </div>
                  <div class="col-xs-2" id="searchBtnCol">
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-xs-2 col-xs-offset-1">
          <div class="buttons">
            @if(Auth::check())
              <div class="btn-group">
                <button type="button" class="btn profile-button dropdown-toggle" data-toggle="dropdown">
                  <span class="glyphicon glyphicon-user"></span>My Profile
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="profile/{{Auth::user()->id}}">Profile</a>
                </ul>
              </div>
            @else
              <a href="register" class="btn btn-default">Sign Up</a>
              <a href="login" class="btn btn-primary">Log In</a>
            @endif
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 button-nav" data-spy="affix" data-offset-top="100">
          <div class="btn-group btn-group-justified">
            <a href="search" class="btn btn-default">View Map</a>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">About<span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="about">About Us</a></li>
                <li><a href="mission">Our Mission</a></li>
              </ul>
            </div>
            <a href="team" class="btn btn-default">Team</a>
            <a href="contact" class="btn btn-default">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
    @yield('content')

    <footer>
      <a href="#"><img src="img/facebook.png" class="social-media"></a>
      <a href="#"><img src="img/linkedin.png" class="social-media"></a>
      <a href="#"><img src="img/twitter.png" class="social-media"></a>
      <a href="#"><img src="img/github.png" class="social-media"></a>
      <a href="#"><img src="img/instagram.png" class="social-media"></a>
      <br />
      <a href="#">Home</a> &middot;
      <a href="#">About</a> &middot;
      <a href="#">Team</a> &middot;
      <a href="#">Login</a> &middot;
      <a href="#">Contact Us</a>
    </footer>
  </body>
</html>
