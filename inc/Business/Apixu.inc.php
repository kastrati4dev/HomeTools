<?php

include $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/Utilities/UtilString.inc.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of apixu
 * 
 * https://www.apixu.com/doc/code-libraries.aspx
 * https://github.com/apixu/apixu-php
 * 
 * @author dardan
 */
class Apixu {

    // Variables
    // -------------------------------------------------------------------------
    // Static variables
    private $api_key = 'a54604b4a4d54c25b73112351181105';
    private $current_weather_url = 'http://api.apixu.com/v1/current.json'; // http://api.apixu.com/v1/current.json?key=a54604b4a4d54c25b73112351181105&q=Paris
    private $forecast_weather_url = 'http://api.apixu.com/v1/forecast.json'; // http://api.apixu.com/v1/forecast.json?key=a54604b4a4d54c25b73112351181105&q=Paris
    // Class attributes
    /**
     * @var string
     */
    private $c_weather_url;

    /**
     * @var string
     */
    private $f_weather_url;

    /**
     * @var string
     */
    private $location;

    // Constructor
    // -------------------------------------------------------------------------

    /**
     * Class constructor.
     */
    public function __construct($p_location) {
        $this->setLocation($p_location);
        $this->setCurrentWeatherUrl();
        $this->setForecastWeatherUrl();
    }

    // Setter
    // -------------------------------------------------------------------------

    /**
     * Set the location
     *
     * @param string $p_location The location of weather
     */
    public function setLocation($p_location) {
        if (!IsNullOrEmptyString($p_location)) {
            $this->location = $p_location;
        } else {
            trigger_error('Invalide location, please define a correct location.', E_USER_WARNING);
            return;
        }
    }

    /**
     * Set the current weather url
     */
    public function setCurrentWeatherUrl() {
        if(!IsNullOrEmptyString($this->api_key)) {
            if(!IsNullOrEmptyString($this->location)) {
                $this->c_weather_url = $this->current_weather_url . '?key=' . $this->api_key . '&q=' . $this->location;
            } else {
                trigger_error('Invalide location, please define a correct location.', E_USER_WARNING);
                return;
            }
        } else {
            trigger_error('Invalide api key, please try later.', E_USER_WARNING);
            return;
        }
    }

    /**
     * Set the forecast weather url
     */
    public function setForecastWeatherUrl() {
        if(!IsNullOrEmptyString($this->api_key)) {
            if(!IsNullOrEmptyString($this->location)) {
                $this->f_weather_url = $this->forecast_weather_url . '?key=' . $this->api_key . '&q=' . $this->location;
            } else {
                trigger_error('Invalide location, please define a correct location.', E_USER_WARNING);
                return;
            }
        } else {
            trigger_error('Invalide api key, please try later.', E_USER_WARNING);
            return;
        }
    }

    // Getter
    // -------------------------------------------------------------------------

    /**
     * Get the current weather url
     * 
     * @return string Json with current weather data
     */
    public function getCurrentWeatherJson() {
        $weather = json_encode(json_decode("{}"));

        if (!IsNullOrEmptyString($this->c_weather_url)) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->c_weather_url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $json_output = curl_exec($ch);
            $weather = json_decode($json_output);
        }
        
        return $weather;
    }

    /**
     * Get the forecast weather url
     * 
     * @return string Json with forecast weather data
     */
    public function getForecastWeatherJson() {
        $weather = json_encode(json_decode("{}"));

        if (!IsNullOrEmptyString($this->f_weather_url)) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->f_weather_url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $json_output = curl_exec($ch);
            $weather = json_decode($json_output);
        }
        
        return $weather;
    }

}

?>