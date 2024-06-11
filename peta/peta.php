<html>
	<head>
		<title> WebGIS GeoJSON Kalimantan Selatan </title>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
		<link rel="shortcut icon" href="assets/image/WKalSelLogo.png" type="image/x-icon">



		<style type="text/css">
			#map { height: 500px;
			}
		</style>
		</head>

	<body>
		<center>
			<marquee behavior="alternate">
			<font color='#000000'><h1><b> WebGIS GeoJSON Kalimantan Selatan </b></h1></font>
			</marquee>
		</center>

		<div id="map"></div>

		<center> <br> 
		<b> Copyright &copy; 2024 WebGIS GeoJSON Kalimantan Selatan <br> FY Rahman </b>
		</center>

	</body>

	<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
	<script src="assets/js/leaflet.ajax.js"> </script>
	<script src="assets/js/leaflet-panel-layers/src/leaflet-panel-layers.js"></script>
	<script src="assets/js/leaflet.ajax.js"></script>
	<script src="assets/js/leaflet-easyPrint-gh-pages/dist/bundle.js"></script>

	<script type="text/javascript">

	var map = L.map('map').setView([-2.965,115.356], 7);


<!-- Tampilan Maps OpenStreetMap -->
		L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 15,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
		}).addTo(map);

<!-- Tampilan Maps Tampilan Satellite -->
		L.tileLayer('https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}?access_token={accessToken}', {
		maxZoom: 25,
		id: 'mapbox.streets',
		accessToken: 'pk.eyJ1IjoiZmF1eml5dXNhcmFobWFuIiwiYSI6ImNsZmpiOXBqYTJnbzUzcnBnNnJzMjB0ZHMifQ.AldZlBJVQaCALzRw-vhWiQ'
		}).addTo(map);

<!-- Tampilan Maps Tampilan Hybrid -->
//		L.tileLayer('http://mt0.google.com/vt/lyrs=y&hl=en&x={x}&y={y}&z={z}?access_token={accessToken}', {
//		maxZoom: 15,
//		id: 'mapbox.streets',
//		accessToken: 'pk.eyJ1IjoiZmF1eml5dXNhcmFobWFuIiwiYSI6ImNsZmpiOXBqYTJnbzUzcnBnNnJzMjB0ZHMifQ.AldZlBJVQaCALzRw-vhWiQ'
//		}).addTo(map);

	L.easyPrint({
	title: 'Cetak Peta Kabupaten',
	position: 'topleft',
	sizeModes: ['A4Portrait', 'A4Landscape']
	}).addTo(map);
	
	function popUp(f,l){
	var out = [];
	if (f.properties){
		for(key in f.properties){
			out.push(key+": "+f.properties[key]);
		}
		l.bindPopup(out.join("<br />"));
	}
	}

	var jsonTest = new L.GeoJSON.AJAX(["assets/geojson/63.04 Kabupaten Barito Kuala - Marabahan.geojson"],{onEachFeature:popUp}).addTo(map);


	</script>

</html>
