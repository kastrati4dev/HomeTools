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

    // JavaScript
    include_once $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/template/js/bootstrapJs.inc.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/template/js/googleChartsJs.inc.php';

    // Content page
    include_once $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/template/menu/top_menu.inc.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/template/menu/left_menu.inc.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/template/content/weather/locationContent.inc.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/template/content/weather/currentContent.inc.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/template/content/chart/googleCharts.inc.php';
    
    // Business
    include $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/Business/Apixu.inc.php';
    include $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/Business/ApixuWeather.inc.php';
    
    ob_start();
    session_start();
    setlocale(LC_ALL, "fr_FR");
?>

<!doctype html>
<html lang="en">
    <head>

        <!-- STYLE SHEET -->
        <?php echo $head; ?>
        <?php echo $icon; ?>
        <?php echo $bootstrapCss; ?>
        <?php echo $dashboardCss; ?>
        
        <!-- JAVASCRIPT -->
        <?php echo $googleChartsJs; ?>
        
        <title>HomeTools</title>
    </head>
    <body>
        
        <?php echo $inc_top_menu; ?>

        <div class="container-fluid">
            
            <?php echo $inc_left_menu; ?>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <?php 
                        echo '<br /><br /><br /><br />';
                    
                        $apixu = new Apixu('La-Chaux-de-Fonds');
                        $currentWeatherJson = $apixu->getCurrentWeatherJson();
                        
                        $apixuWeather = new ApixuWeather($currentWeatherJson);
                        $location = $apixuWeather->getLocation();
                        $current = $apixuWeather->getCurrent();
                        
                        // Show location
                        echo showLocationWithMap($location);

                        echo '<hr class="featurette-divider">';
                        
                        // Show current weather
                        echo showCurrentWeather($current);
                    ?>
                </main>
            
        </div>

        <?php echo $bootstrapJs; ?>

    </body>
</html>