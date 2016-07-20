@extends('layouts.prelogin')

@section('head')
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYmxJX9tfQEhJsbAjQViXzm83l4pixEkQ&libraries=places&callback=initAutocomplete" async defer></script>
@endsection

@section('content')
  <div class="container-fluid">
    @include('includes.picture', [
      'heading'  => "About Us",
      'subtitle' => "Learn more about the origin of Flushr, our journey, and how we're going to change the world one bathroom at a time.",
      'image'    => "img/bigredhacks.png",
      'alt'      => "Big Red Hacks"
    ])
    <div class="row about-section">
      <div class="col-md-3"></div>
      <div class="col-md-6 about-content">
        <div class="about-header"><h2>About Us</h2></div>
        <p>
          Flushr began as a project at the Big Red//Hacks hackathon
          in September 2015 at Cornell University. The initial four-person
          Flushr team had 36 hours to create the perfect app - and coming in,
          we had no idea what project we were going to tackle. After a break
          for Homecoming fireworks, the idea came to us - what if we made a Yelp
          for public bathrooms?
        </p>
        <p>
          Thus, the idea was born. Though none of us had very much experience,
          we coded hard, with some team members logging 50 straight hours awake.
          After a lot of energy drinks and advice from mentors at the hackathon,
          we ended up placing in the top 10 of over 70 teams at the hackathon.
          The positive commentary we received led us to realize how much
          potential this idea had.
        </p>
        <p>
          Now, we are always trying to grow our impact and our team. We believe
          that everyone deserves a good bathroom experience. We all go every
          day - might as well make it enjoyable! With Flushr, you are getting
          a top-notch experience that will not be matched anywhere else.
        </p>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
@endsection
