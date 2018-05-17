<?php
    // Fonctions de contr�les
    // **********************************************************************************************

    /*			URI Check			*/
    // -------------------------------------------------------------------------

    function verifUriForGetRequest ($uri)
    {
        if(strpos($uri,'?') !== false)
        {
                return true;
        }
        else
        {
                return false;
        }
    }

    function loadDefaultPage()
    {
        // We create default URI and we refresh it
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        header("Location: http://$host$uri");
    }

    
    /*			Char encode / decode			*/
    // ---------------------------------------------------------------------

    // General check for special characters
    function encode_char_for_mysql($char)
    {
        $char = str_replace("&", "&amp;", $char);
        $char = str_replace("�", '&eacute;', $char);
        $char = str_replace("�", "&Eacute;", $char);
        $char = str_replace("�", "&egrave;", $char);
        $char = str_replace("�", "&Egrave;", $char);
        $char = str_replace("�", "&ccedil;", $char);
        $char = str_replace("�", "&Ecirc;", $char);
        $char = str_replace("�", "&agrave;", $char);
        $char = str_replace("�", "&Agrave;", $char);
        $char = str_replace("�", "&acirc;", $char);
        $char = str_replace("�", "&Acirc;", $char);
        $char = str_replace("�", "&auml;", $char);
        $char = str_replace("�", "&ograve;", $char);
        $char = str_replace("�", "&ocirc;", $char);
        $char = str_replace("�", "o", $char);
        $char = str_replace("�", "&ugrave;", $char);
        $char = str_replace("�", "&ucirc;", $char);
        $char = str_replace("�", "&uuml;", $char);
        $char = str_replace("�", "&igrave;", $char);
        $char = str_replace("�", "&iuml;", $char);
        $char = str_replace("�", "&ccedil;", $char);

        /*
        ��������������������&
        */

        return $char;
    }

    // Convert ASCI to word
    function decode_char_for_mysql($char)
    {
        $char = str_replace("&amp;", "&", $char);
        $char = str_replace("&eacute;", "�", $char);
        $char = str_replace("&Eacute;", "�", $char);
        $char = str_replace("&egrave;", "�", $char);
        $char = str_replace("&Egrave;", "�", $char);
        $char = str_replace("&ccedil;", "�", $char);
        $char = str_replace("&Ecirc;", "�", $char);
        $char = str_replace("&agrave;", "�", $char);
        $char = str_replace("&Agrave;", "�", $char);
        $char = str_replace("&acirc;", "�", $char);
        $char = str_replace("&Acirc;", "�", $char);
        $char = str_replace("&auml;", "�", $char);
        $char = str_replace("&ograve;", "�", $char);
        $char = str_replace("&ocirc;", "�", $char);
        $char = str_replace("&ugrave;", "�", $char);
        $char = str_replace("&ucirc;","�", $char);
        $char = str_replace("&uuml;", "�", $char);
        $char = str_replace("&igrave;", "�", $char);
        $char = str_replace("&iuml;", "�", $char);
        $char = str_replace("&ccedil;", "�", $char);

        /*
        ��������������������&
        */

        return $char;
    }
?>