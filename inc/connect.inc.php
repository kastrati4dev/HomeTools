<?php

    // <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< database connection >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    // *************************************************************************************************************************************
    $user = '';
    $password = '';
    $base = '';
    $server = "";
	

    $con = mysql_connect($server,$user,$password);
    if($con !== false){
            if(mysql_select_db($base)){
                // Connexion �tablie
            }else{
                //La s�lection n'a pas fonctionn� !
                exit;
            }
    }else{
         //Pas de connection � la base de donn�es
         exit;
    }
?>