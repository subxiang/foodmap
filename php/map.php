<!DOCTYPE html>
<html>
<head>
	<title>Food Map</title>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<style>
		html, body, #map-canvas {
			height: 100%;
			margin: 0px;
			padding: 0px
		}
	</style>
	
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false">
	</script>
	
	<script>
		function initialize() {
			var options = {
				zoom: 8,
				center: new google.maps.LatLng(-34.397, 150.644),
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};

			var map = new google.maps.Map(document.getElementById('map-canvas'), options);

			var marker = new google.maps.Marker({
					position: map.getCenter(),
					map: map,
					title: 'Click to zoom'
				});

			google.maps.event.addListener(marker, 'click', function() {
					map.setZoom(8);
					map.setCenter(marker.getPosition());
				});

			google.maps.event.addListener(map, 'center_changed', function() {
					window.setTimeout(function() {
							map.panTo(marker.getPosition());
						}, 3000);
				});

			google.maps.event.addListener(map, 'click', function(event) {
					placeMarker(event.latLng);
				});
		}

		function placeMarker(location) {
			var marker = new google.maps.Marker({
					position: location,
					map: map
				});
		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</head>
<body>
	<div id='map-canvas'></div>
</body>
</html>