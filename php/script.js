/**
 * initialize the food map
 */

function createBaseMap() {
	var options = {
			zoom: 8,
			center: new google.maps.LatLng(-34.397, 150.644),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
	return new google.maps.Map(document.getElementById('map-canvas'), options);
}

function createFood(position, url) {
	var marker = new google.maps.Marker({
			position: position,
			icon: url,
			title: 'Click to zoom'
		});
	
	return marker;
}

function initialize() {
	var map = createBaseMap();
	var food = createFood();

	google.maps.event.addListener(map, 'click', function(event) {
			food.setPosition(event.latLng);
			food.setMap(map);
		});
}
		
google.maps.event.addDomListener(window, 'load', initialize);