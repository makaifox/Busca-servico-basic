<script src="http://maps.google.com/maps/api/js"></script>

var lat = '';
var lng = '';
var address = {cep} or {endereço};
geocoder.geocode( { 'address': address}, function(results, status) {
  if (status == google.maps.GeocoderStatus.OK) {
     lat = results[0].geometry.location.lat();
     lng = results[0].geometry.location.lng();
  } else {
     alert("Não foi possivel obter localização: " + status);
  }
});
alert('Latitude: ' + lat + ' Logitude: ' + lng);