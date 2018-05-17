<?php
    include $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/debug.inc.php';
    //include 'connect.inc.php';

    function mailer_require()
    {
        require_once $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/mailer/class.phpmailer.php';
        require_once $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/mailer/class.smtp.php';
    }

    /*			JS 			*/

    function showAlertJs($txt)
    {
        echo '<script type="text/javascript">
                alert("'.$txt.'"); 
            </script>';
    }
    
    // <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< database functions >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    // *************************************************************************************************************************************

?>