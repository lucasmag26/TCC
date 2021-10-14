function meuMapa() {
	var myCenter = new google.maps.LatLng(-23.200,-45.911);
	var propriedades = {
	center: myCenter,
	zoom: 18,
	mapTypeId: google.maps.MapTypeId.ROADMAP
};
	var map = new google.maps.Map(document.getElementById('mapa'), propriedades);
	// var icon = {
	// 	url: '../img/marcador.svg',
	// 	scaledSize: new google.maps.Size(200, 200),
	// 	origin: new google.maps.Point(0, 0),
	// 	anchor: new google.maps.Point(10, 20)
	// };
  var marker = new google.maps.Marker({position: myCenter});
  marker.setMap(map);
}