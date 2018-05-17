<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function showCurrentWeather($current) {
    
    $humidityChartData = 'var data = google.visualization.arrayToDataTable([
                    [\'Effort\', \'Amount given\'],
                    [\'Taux\', '. $current->getHumidity() .'],
                ]);';
    $humidityChartOption = 'var options = {
                    pieHole: 0.5,
                    pieSliceTextStyle: {
                        color: \'black\',
                    },
                    legend: \'none\'
                };';
    
    return '
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Quel temps fait-t\'il ? <span class="text-muted"></span></h2>
            <p>
                <b>Date </b>
                '. $current->getlastUpdated() .'
            </p>
            <p>
                <b>Temps </b>
                '. $current->getIsDayString() .'
            </p>
            
            <h4>Vent</h4>
            <p>
                <b>Vitesse km/h </b>
                '. $current->getWindKph() .'
            </p>
            <p>
                <b>Degr&eacute;e </b>
                '. $current->getWindDegree() .'
            </p>
            <p>
                <b>Direction </b>
                '. $current->getWindDir() .'
            </p>
            
            <h4>Humidit&eacute; / nuage</h4>
            <p>
                <b>Humidit&eacute; </b>
                '. getPieCharts($humidityChartData, $humidityChartOption) .'
            </p>
            <p>
                <b>Nuage </b>
                '. $current->getCloud() .'%
            </p>
          </div>
          <div class="col-md-5 order-md-1">
            <div style="text-align:center;" class="row">
                <div class="col-12">
                    <img class="featurette-image img-fluid mx-auto" src="'. $current->getCondition()->getIcon() .'" alt="Generic placeholder image">
                </div>
                <div class="col-12">
                    <p>
                        <b>Temp&eacute;rature &deg;C / &deg;F </b>
                        '. $current->getTempC() .' / '. $current->getTempF() .' 
                    </p>
                </div>
            </div>
           
          </div>
        </div>
    ';
}

?>