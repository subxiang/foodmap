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

			new google.maps.Map(document.getElementById('map-canvas'), options);
		}

		google.maps.event.addDomListener(window, 'load', initialize);
	</script>
</head>
<body>
	<div id='map-canvas'></div>
	<?php test();?>
</body>
</html>