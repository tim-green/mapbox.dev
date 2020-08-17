<?php include('inc/global/optimise.php');?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <title>Mapbox Development</title>
  <meta charset="utf-8">
  <meta name="description" content="Development of Mapbox Demos">
  <meta name="robots" content="noindex, nofollow, all" />
  <meta name="author" content="Tim Green">
  <meta name="publisher" content="Tim Green">
  <meta name="google" content="notranslate" />
  <meta name="viewport" content="initial-scale=1, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />

  <meta name="apple-mobile-web-app-title" content="Tim Green">
  <meta name="application-name" content="Tim Green">
  <meta name="msapplication-TileColor" content="#363558">
  <meta name="theme-color" content="#363558">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" href="assets/images/favicon/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="assets/images/favicon/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="assets/images/favicon/favicon.ico" sizes="16x16" />
  <link rel="mask-icon" href="assets/images/favicon/safari-pinned-tab.svg" color="#363558">

  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.7.2/animate.min.css">
  <link rel="stylesheet" href="assets/build/app.min.css">

  <!-- Mapbox -->
  <?php include_once('inc/config/mapbox-config.php');?>
</head>

<!-- BODY -->
<body>
<!-- loading -->

    <?php include('inc/global/header.php');?>
    <div class="display main">
        
    <h1>Map with 3D Buildings</h1>
    <div class="map-box" id="section-apps">
    <!-- section start-->
      <section>
        <div id="map" class="mapbox-map"></div>
      <script>
      mapboxgl.accessToken = 'pk.eyJ1IjoiZ3JvdW5kY3RybCIsImEiOiJjanhvb2FuczkwOTBxM2RwOWR2M2dzcTBvIn0.4OIjhU9J4sQVJGkNIF1eVg';
      var map = new mapboxgl.Map({
  style: 'mapbox://styles/groundctrl/ckdy38khp4oln19mmpqg34yrx',
  
	center: [144.963058, -37.813610],
	zoom: 15.5,
	pitch: 45,
	bearing: -17.6,
	container: 'map',
	antialias: true
});
// The 'building' layer in the mapbox-streets vector source contains building-height
// data from OpenStreetMap.
map.on('load', function() {
	// Insert the layer beneath any symbol layer.
	var layers = map.getStyle().layers;
	var labelLayerId;
	for(var i = 0; i < layers.length; i++) {
		if(layers[i].type === 'symbol' && layers[i].layout['text-field']) {
			labelLayerId = layers[i].id;
			break;
		}
	}
	map.addLayer({
		'id': '3d-buildings',
		'source': 'composite',
		'source-layer': 'building',
		'filter': ['==', 'extrude', 'true'],
		'type': 'fill-extrusion',
		'minzoom': 15,
		'paint': {
			'fill-extrusion-color': '#aaa',
			// use an 'interpolate' expression to add a smooth transition effect to the
			// buildings as the user zooms in
			'fill-extrusion-height': ['interpolate', ['linear'],
				['zoom'],
				15,
				0,
				15.05, ['get', 'height']
			],
			'fill-extrusion-base': ['interpolate', ['linear'],
				['zoom'],
				15,
				0,
				15.05, ['get', 'min_height']
			],
			'fill-extrusion-opacity': 0.6
		}
	}, labelLayerId);
});
      </script>

      </section>
   <!-- section ends-->
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/combine/npm/jquery@3,npm/jquery-match-height@0.7.2"></script>
  <script src="https://kit.fontawesome.com/ceb2b8cd67.js"></script>
  <script src="assets/build/app.min.js"></script>
</body>
</html>
