<?php
    include $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/start.inc.php';
    include $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/check.inc.php';

    // Template
    // -----------------------------------------------------------------------------

    // Head
    include_once $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/template/head/head.inc.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/template/head/icon.inc.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/template/head/bootstrapCss.inc.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/template/head/dashboardCss.inc.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/template/head/carouselCss.inc.php';

    // JavaScript
    include_once $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/template/js/bootstrapJs.inc.php';;

    // Content page
    include_once $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/template/menu/top_menu.inc.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/template/menu/left_menu.inc.php';

    ob_start();
    session_start();
    setlocale(LC_ALL, "fr_FR");
?>
<!doctype html>
<html lang="en">
    <head>

        <?php echo $head; ?>

        <?php echo $icon; ?>

        <?php echo $bootstrapCss; ?>
        
        <?php echo $dashboardCss; ?>
        
        <?php echo $carouselCss; ?>

        <title>HomeTools</title>
    </head>
    <body>
        
        <?php echo $inc_top_menu; ?>

        <div class="container-fluid">
            
            <?php echo $inc_left_menu; ?>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <!--
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Dashboard</h1>
                    </div>

                    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                    -->
                    
                    <?php
                        phpinfo(); 
                    ?>
                    
                </main>
            </div>
        </div>

        <?php echo $bootstrapJs; ?>

        <!-- Icons -->
        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
        <script>
            feather.replace()
        </script>

        <!-- Graphs -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                    datasets: [{
                            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                            lineTension: 0,
                            backgroundColor: 'transparent',
                            borderColor: '#007bff',
                            borderWidth: 4,
                            pointBackgroundColor: '#007bff'
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: false
                                }
                            }]
                    },
                    legend: {
                        display: false,
                    }
                }
            });
        </script>
    </body>
</html>