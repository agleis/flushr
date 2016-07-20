@extends('layouts/prelogin')

@section('head')
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYmxJX9tfQEhJsbAjQViXzm83l4pixEkQ&libraries=places&callback=initialize" async defer></script>
@endsection

@section('content')
  <div class="container-fluid map-container">
    <div class="row">
      <div class="col-md-3">
        
      </div>
      <div class="col-md-9">
        <div id="map"></div>
      </div>
    </div>
  </div>
@endsection
