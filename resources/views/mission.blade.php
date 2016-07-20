@extends('layouts.prelogin')

@section('content')
  <div class="conteiner-fluid">
    @include('includes.picture', [
      'heading'  => "Our Mission",
      'subtitle' => "Find out what truly drives us here at Flushr. Learn how we're committed to make the experience of finding a bathroom painless and, dare we say it, fun!",
      'image'    => "img/singapore.jpg",
      'alt'      => "City at Night"
    ])
    <div class="row about-section">
      <div class="col-md-3"></div>
      <div class="col-md-6 about-content">
        <div class="about-header"><h2>Our Mission</h2></div>
        <p>
          Flushr's main aim is to ensure that everyone is able to find a
          clean, comfortable bathroom, no matter where they are. Flushr
          is designed with the user in mind - we are built for a streamlined
          experience that will let you get where you're going.
        </p>
        <p>
          The Flushr team hopes to ensure that in a new, unfamiliar
          environment, you can still find a bathroom that you will enjoy.
          To that end, we have a special marking for gender-neutral bathrooms,
          so that users from any background will have somewhere to go.
        </p>
        <p>
          Please let us know of any questions or concerns you have.
          Your experience is a huge priority for us, and we want to do everyhing
          possible to ensure that we are the best bathroom app for you.
        </p>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
@endsection
