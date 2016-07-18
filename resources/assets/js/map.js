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
