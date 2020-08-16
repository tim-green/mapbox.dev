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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/combine/npm/prismjs@1.21.0/themes/prism.min.css,npm/prismjs@1.21.0/plugins/line-numbers/prism-line-numbers.min.css,npm/prismjs@1.21.0/plugins/line-highlight/prism-line-highlight.min.css,npm/prismjs@1.21.0/themes/prism-tomorrow.min.css">
  <link rel="stylesheet" href="assets/build/app.min.css">

  <!-- Mapbox -->
  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />

  <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.0.9/mapbox-gl-draw.js'></script>
<link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.0.9/mapbox-gl-draw.css' type='text/css' />

</head>

<!-- BODY -->
<body>
<!-- loading -->

       <?php include('inc/global/header.php');?>

    
    <div class="display main">
        
    <h1>Driving Directions</h1>
    <div class="map-box" id="section-apps">
    <!-- section start-->
     <section>
        <div id="map"></div>

    </section>


    <script>
    // Add your Mapbox access token
    mapboxgl.accessToken = 'pk.eyJ1IjoiZ3JvdW5kY3RybCIsImEiOiJjanhvb2FuczkwOTBxM2RwOWR2M2dzcTBvIn0.4OIjhU9J4sQVJGkNIF1eVg';
    var map = new mapboxgl.Map({
      container: 'map', // Specify the container ID
      style: 'mapbox://styles/mapbox/streets-v11', // Specify which map style to use
      center: [-122.42136449,37.80176523], // Specify the starting position
      zoom: 14.5, // Specify the starting zoom
    });

    var draw = new MapboxDraw({
  // Instead of showing all the draw tools, show only the line string and delete tools
  displayControlsDefault: false,
  controls: {
    line_string: true,
    trash: true
  },
  styles: [
    // Set the line style for the user-input coordinates
    {
      "id": "gl-draw-line",
      "type": "line",
      "filter": ["all", ["==", "$type", "LineString"],
        ["!=", "mode", "static"]
      ],
      "layout": {
        "line-cap": "round",
        "line-join": "round"
      },
      "paint": {
        "line-color": "#438EE4",
        "line-dasharray": [0.2, 2],
        "line-width": 4,
        "line-opacity": 0.7
      }
    },
    // Style the vertex point halos
    {
      "id": "gl-draw-polygon-and-line-vertex-halo-active",
      "type": "circle",
      "filter": ["all", ["==", "meta", "vertex"],
        ["==", "$type", "Point"],
        ["!=", "mode", "static"]
      ],
      "paint": {
        "circle-radius": 12,
        "circle-color": "#FFF"
      }
    },
    // Style the vertex points
    {
      "id": "gl-draw-polygon-and-line-vertex-active",
      "type": "circle",
      "filter": ["all", ["==", "meta", "vertex"],
        ["==", "$type", "Point"],
        ["!=", "mode", "static"]
      ],
      "paint": {
        "circle-radius": 8,
        "circle-color": "#438EE4",
      }
    },
  ]
});

// Add the draw tool to the map
map.addControl(draw);

  </script>
<div class="info-box">
  <div id="info">
    <p>Draw your route using the draw tools on the right. To get the most accurate route match, draw points at regular intervals.</p>
  </div>
  <div id="directions"></div>
</div>


<pre class="hide">
  <code class="language-js">
           
  </code>
</pre>

    <!-- section ends-->
    

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/combine/npm/jquery@3,npm/jquery-match-height@0.7.2"></script>
<script src="https://kit.fontawesome.com/ceb2b8cd67.js"></script>
<script src="assets/build/app.min.js" defer></script>
</body>
</html>
