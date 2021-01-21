<head>
    <link rel="stylesheet" href="<?= base_url('assets/leaflet/leaflet.css') ?>">
    <script src="<?= base_url('assets/leaflet/leaflet.js') ?>"></script>
</head>
<?php $title = explode('|', $judul) ?>
<section id="page-content">
    <div class="container-fluid">
        <div class="heading-text heading-section text-center" data-animate="rubberBand">
            <h2><?= $title[0] ?></h2>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-6 peta" data-animate="zoomIn">
                <div id="map" style="width:100%; height: 380px;"></div>
                <h3 class="text-center">Kantor Pusat</h3>
            </div>
            <br>
            <br>
            <div class="col-lg-6 peta" data-animate="zoomIn">
                <div id="mapKas" style="width:100%; height: 380px;"></div>
                <h3 class="text-center">Kantor Kas UIR</h3>
            </div>
        </div>
    </div>
</section>
<div class="seperator"><i class="fa fa-chevron-down"></i></div>

<script>
    var mymap = L.map('map').setView([0.424509, 101.435762], 18);
    var kas = L.map('mapKas').setView([0.447404, 101.453733], 18);
    L.tileLayer('https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}').addTo(mymap);
    L.tileLayer('https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}').addTo(kas);

    var popup = L.popup();

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(mymap);
    }
    // 0.424466, 101.435681 pusat 0.424509, 101.435762
    // 0.447179, 101.453663 kas 0.447404, 101.453733
    var marker = L.marker([0.424466, 101.435681]).addTo(mymap).bindPopup("Kantor Pusat");
    var marker = L.marker([0.447179, 101.453663]).addTo(kas).bindPopup("Kantor Kas UIR");

    mymap.on('click', onMapClick);
</script>