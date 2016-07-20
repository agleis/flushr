// This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.

// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

//var autocomplete;

function initAutocomplete(map = "") {
  // Create the autocomplete object, restricting the search to geographical
  // location types.
  var autocompleteMain = new google.maps.places.Autocomplete(document.getElementById('searchMain'));

  autocompleteMain.addListener('place_changed', function() {
    var place = autocompleteMain.getPlace();
  });
  if(map === "") {
    var autocompleteCity = new google.maps.places.Autocomplete(document.getElementById('searchCity'));
    var autocompleteRoad = new google.maps.places.Autocomplete(document.getElementById('searchRoad'));
    var autocompleteCollege = new google.maps.places.Autocomplete(document.getElementById('searchCollege'));

    autocompleteCity.addListener('place_changed', function() {
      var place = autocompleteCity.getPlace();
    });
    autocompleteRoad.addListener('place_changed', function() {
      var place = autocompleteRoad.getPlace();
    });
    autocompleteCollege.addListener('place_changed', function() {
      var place = autocompleteCollege.getPlace();
    });
  }
}

function initialize(){
  var mapCanvas = document.getElementById('map');
  var mapOptions = {
    center: new google.maps.LatLng(42.4476, -76.4827),
    zoom: 15,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    mapTypeControl: false
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
  initAutocomplete("map");
}

//# sourceMappingURL=all.js.map
