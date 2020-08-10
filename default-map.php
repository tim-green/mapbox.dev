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
  <?php include_once('inc/config/mapbox-config.php');?>
</head>

<!-- BODY -->
<body>
<!-- loading -->

       <?php include('inc/global/header.php');?>

    
    <div class="display main">
        
    <h1>Default Map</h1>
    <div class="map-box" id="section-apps">
    <!-- section start-->
        <section>
        <div id='map' style='width: auto; height: 300px;'></div>
            <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoiZ3JvdW5kY3RybCIsImEiOiJjanhvb2FuczkwOTBxM2RwOWR2M2dzcTBvIn0.4OIjhU9J4sQVJGkNIF1eVg';
            var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11'
            });
            </script>
        </section>


<pre>
  <code>
  <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoiZ3JvdW5kY3RybCIsImEiOiJjanhvb2FuczkwOTBxM2RwOWR2M2dzcTBvIn0.4OIjhU9J4sQVJGkNIF1eVg';
            var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11'
            });
            </script>
  </code>
</pre>
    <!-- section ends-->
    

    </div>
  </div>
<script src="https://cdn.jsdelivr.net/combine/npm/jquery@3.4.1,npm/jquery-match-height@0.7.2,npm/prismjs@1.21.0,npm/prismjs@1.21.0/components/prism-core.min.js,npm/prismjs@1.21.0/plugins/autoloader/prism-autoloader.min.js,npm/prismjs@1.21.0/plugins/unescaped-markup/prism-unescaped-markup.min.js,npm/prismjs@1.21.0/plugins/unescaped-markup/prism-unescaped-markup.min.js,npm/prismjs@1.21.0/plugins/keep-markup/prism-keep-markup.min.js,npm/prismjs@1.21.0/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js,npm/prismjs@1.21.0/plugins/download-button/prism-download-button.min.js,npm/prismjs@1.21.0/plugins/show-language/prism-show-language.min.js,npm/prismjs@1.21.0/plugins/line-numbers/prism-line-numbers.min.js,npm/prismjs@1.21.0/plugins/line-highlight/prism-line-highlight.min.js"></script>
<script src="https://kit.fontawesome.com/ceb2b8cd67.js"></script>
<script src="../assets/build/app.min.js" defer></script>
</body>
</html>
