<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner Pekanbaru</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
     integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
     crossorigin=""/>
      <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
     integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
     crossorigin=""></script>
     <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.css" />
<script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol/dist/L.Control.Locate.min.js"
charset="utf-8"></script>
    <STYle>
         html, body {
        height: 100%;
        margin: 0;
    }
        .leaflet-container{
        height: 1200px;
        width: 1400px;
        max-width: 100%;
        max-height: 100%;
        }
    </STYle>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    
</head>
<body>
    <div id="map"></div>
    
    <script>
     var map = L.map('map' ,{
    center: [0.5074071651111761, 101.44880299565558], 
    zoom:13
    });

    var marker = L.marker([0.5074071651111761, 101.44880299565558]).addTo(map);
    marker.bindPopup("<b>Hello dunia!</b><br>Saya ada.").openPopup();

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
    L.Control.geocoder({
position: 'topleft'
}).addTo(map);
L.control.locate().addTo(map);
</script>
</body>
</html>