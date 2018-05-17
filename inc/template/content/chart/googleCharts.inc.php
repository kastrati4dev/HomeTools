<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getPieCharts($data, $option) {
    return '
        <script type="text/javascript">
            google.charts.load(\'current\', {\'packages\':[\'corechart\']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                '. $data .' 
                
                '. $option .' 

                var chart = new google.visualization.PieChart(document.getElementById(\'donut_single\'));
                chart.draw(data, options);
            }
        </script>

        <div id="donut_single" style="width: 100px; height: 100px;"></div>
    ';
}

?>