<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Flushr</title>
    <link rel="stylesheet" property="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{URL::asset('js/all.js')}}"></script>
    <link rel="stylesheet" property="stylesheet" type="text/css" href="{{URL::asset('css/app.css')}}">
    @yield('head')
  </head>
  <body>
    <div class="container-fluid">
      <div class="navbar row">
        <div class="col-xs-9">
          <div class="row">
            <div class="col-xs-5">
              <div class="title">
                <a href="{{URL::route('index')}}"><img src="{{URL::asset('img/flushr_logo.jpg')}}" height="70" alt="Flushr"></a>
              </div>
            </div>
            <div class="col-xs-7" id="mainSearchDiv">
              <form method="get" action="{{URL::route('search')}}" class="form-inline" id="mainSearch">
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
                  <li><a href="{{URL::route('profile/'.Auth::user()->id.'')}}'">Profile</a>
                </ul>
              </div>
            @else
              <a href="{{url('register')}}" class="btn btn-default">Sign Up</a>
              <a href="{{url('login')}}" class="btn btn-primary">Log In</a>
            @endif
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 button-nav" data-spy="affix" data-offset-top="100">
          <div class="btn-group btn-group-justified">
            <a href="{{URL::route('search')}}" class="btn btn-default">View Map</a>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">About<span class="caret"></span></button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{URL::route('about')}}">About Us</a></li>
                <li><a href="{{URL::route('mission')}}">Our Mission</a></li>
              </ul>
            </div>
            <a href="{{URL::route('team')}}" class="btn btn-default">Team</a>
            <a href="{{URL::route('contact')}}" class="btn btn-default">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
    @yield('content')

    <footer>
      <a href="#"><img src="{{URL::asset('img/facebook.png')}}" class="social-media"></a>
      <a href="#"><img src="{{URL::asset('img/linkedin.png')}}" class="social-media"></a>
      <a href="#"><img src="{{URL::asset('img/twitter.png')}}" class="social-media"></a>
      <a href="#"><img src="{{URL::asset('img/github.png')}}" class="social-media"></a>
      <a href="#"><img src="{{URL::asset('img/instagram.png')}}" class="social-media"></a>
      <br />
      <a href="{{URL::route('index')}}">Home</a> &middot;
      <a href="{{URL::route('about')}}">About</a> &middot;
      <a href="{{URL::route('team')}}">Team</a> &middot;
      <a href="{{url('login')}}">Login</a> &middot;
      <a href="{{URL::route('contact')}}">Contact Us</a>
    </footer>
  </body>
</html>
