<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function showLocationWithMap($location) {
    return '
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">M&eacute;t&eacute;o pour <span class="text-muted">'. $location->getName() .'</span></h2>
            <p>
                <b>R&eacute;gion</b>
                '. $location->getRegion() .'
            </p>
            <p>
                <b>Pays</b>
                '. $location->getCountry() .'
            </p>
            <p>
                <b>Fuseau horaire</b>
                '. $location->getTzId() .'
            </p>
          </div>
          <div class="col-md-5">
            <div id="map" style="width:100%;height:300px;background-color:grey;"></div>
            '. showMapByLatLon($location->getLat(), $location->getLon()) .'
          </div>
        </div>
    ';
}

function showMapByLatLon($lat, $lon) {
    $googleKey = 'AIzaSyAQrvcNJ8sdgkH1OVeNhLiAmBu9LKqNaMA';
    return '
        <script>
            function initMap() {
              var latLon = {lat: '. $lat .', lng: '. $lon .'};
              var map = new google.maps.Map(document.getElementById("map"), {
                zoom: 10,
                center: latLon
              });
              var marker = new google.maps.Marker({
                position: latLon,
                map: map
              });
            }
          </script>
          <script async defer
            src="https://maps.googleapis.com/maps/api/js?key='.$googleKey.'&callback=initMap">
          </script>
    ';
}

?>