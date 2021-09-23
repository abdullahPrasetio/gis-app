<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gis App</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <style>
        #mapid { height: 500px; }
    </style>
</head>
<body>
    <div id="mapid"></div>

     <!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
crossorigin=""></script>

  <!-- Load Esri Leaflet from CDN -->
<script src="https://unpkg.com/esri-leaflet@2.5.3/dist/esri-leaflet.js"
    integrity="sha512-K0Vddb4QdnVOAuPJBHkgrua+/A9Moyv8AQEWi0xndQ+fqbRfAFd47z4A9u1AW/spLO0gEaiE1z98PK1gl5mC5Q=="
    crossorigin=""></script>

<script>
    var map = L.map('mapid').setView([-6.1641491, 106.8895255], 13);
    // Esri
    // L.esri.basemapLayer('Imagery').addTo(map);
// GOogle street    
// L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
//     maxZoom: 20,
//     subdomains:['mt0','mt1','mt2','mt3']
// }).addTo(map);
// Google hybrid
    // L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
    //     maxZoom: 20,
    //     subdomains:['mt0','mt1','mt2','mt3']
    // }).addTo(map);
    // Satelite
    // L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
    // maxZoom: 20,
    // subdomains:['mt0','mt1','mt2','mt3']
    // }).addTo(map);
    // Terrain
    L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
    }).addTo(map);
    // L.marker([-6.1641491, 106.8895255]).addTo(map);
    // pentunjuk
//     Hybrid: s,h;
    // Satellite: s;
    // Streets: m;
    // Terrain: p;
    var hotelIcon = L.icon({
        iconUrl: "{{ url('assets/icons/hotel.png') }}",

        iconSize:     [24, 28], // size of the icon
        shadowSize:   [50, 64], // size of the shadow
        iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
        shadowAnchor: [4, 62],  // the same for the shadow
        popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
    });
    // L.marker([-6.1641491, 106.8895255], {icon: hotelIcon}).addTo(map);
    // const marker = L.marker([-6.1641491, 106.8895255], {icon: hotelIcon}).addTo(mymap).on('click',function(e){
    //     alert(e.latlng)
    // });
    // create a red polyline from an array of LatLng points
var latlngs = [
    [
        -6.238343371151311,
        107.01936721801758
          ],
          [
              -6.239793850609861,
              106.99602127075194
          ],
          [
              -6.230664295399371,
              106.99361801147461
          ],
          [
              -6.2315175315898435,
              107.0126724243164
          ],
          [
              -6.248496643017333,
              107.00383186340332
          ],
          [
              -6.246875545590788,
              106.98168754577637
          ],
          [
              -6.22716601251707,
              107.00666427612305
          ],
          [
              -6.226568742378317,
              107.01971054077147
          ],
          [
              -6.241244326053585,
              107.01919555664062
          ]
];

var polyline = L.polyline(latlngs, {color: 'red'}).addTo(map);

// zoom the map to the polyline
map.fitBounds(polyline.getBounds());
polyline.on('click',function(e){
    alert(e.latlng)
})
</script>
</body>
</html>