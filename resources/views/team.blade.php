@extends('layouts.prelogin')

@section('head')
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYmxJX9tfQEhJsbAjQViXzm83l4pixEkQ&libraries=places&callback=initAutocomplete" async defer></script>
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 carousel-col">
        <div class="item active" id="our-mission">
          <div class="carousel-caption">
            <div class="heading">
                <h1>Our Team</h1>
            </div>
            <div class="image-subtitle">
              <p>Meet the team that works to make Flushr a reality!
              </p>
            </div>
          </div>
          <div class="image-overlay"></div>
          <img src="img/bigredhacks.png" alt="Big Red Hacks">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="list-divs">
          <div class="list-divs-overlay"></div>
          <div class="list-divs-content">
            <img src="img/Me.jpg">
            <a href="contact">
              <div class="row">
                <div class="list-divs-text col-xs-6">
                  <h1>Adam Gleisner</h1>
                </div>
                <div class="list-divs-text col-xs-4">
                  <p>Adam is a Computer Science major at Cornell University
                  and the CEO of Flushr. As part of the founding team, he
                  has worked to make Flushr perfect.</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="list-divs">
          <div class="list-divs-overlay"></div>
          <div class="list-divs-content">
            <img src="img/default-user-image.png">
            <a href="contact">
              <div class="row">
                <div class="list-divs-text col-xs-6">
                  <h1>Matthew Luebbers</h1>
                </div>
                <div class="list-divs-text col-xs-4">
                  <p>Luebbers is a Computer Science major at Cornell University
                  and the CTO of Flushr. He is also involved with the Coding Connection team.</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="list-divs">
          <div class="list-divs-overlay"></div>
          <div class="list-divs-content">
            <img src="img/default-user-image.png">
            <a href="contact">
              <div class="row">
                <div class="list-divs-text col-xs-6">
                  <h1>Kyler Ruvane</h1>
                </div>
                <div class="list-divs-text col-xs-4">
                  <p>Kyler is a Computer Science major at Cornell University
                  and the CFO of Flushr. He knows the ins and outs of
                  the business better than everyone else.</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="list-divs">
          <div class="list-divs-overlay"></div>
          <div class="list-divs-content">
            <img src="img/default-user-image.png">
            <a href="contact">
              <div class="row">
                <div class="list-divs-text col-xs-6">
                  <h1>Lona Sharpstene</h1>
                </div>
                <div class="list-divs-text col-xs-4">
                  <p>Lona is a human development major at Cornell University
                  and a prospective Harvard law school student. She is also
                  the lead designer of the original site.</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
