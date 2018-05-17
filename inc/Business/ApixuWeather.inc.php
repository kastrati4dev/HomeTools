<?php

//include $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/Utilities/UtilString.inc.php';

include $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/Business/ApixuWeatherLocation.inc.php';
include $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/Business/ApixuWeatherCurrent.inc.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of apixuWeather
 *
 * @author dardan
 */
class ApixuWeather {
    
    private $location;
    private $current;
    private $forecast;
    
    // Constructor
    // -------------------------------------------------------------------------

    /**
     * Class constructor.
     */
    public function __construct($weatherJson) {
        if(!IsNullOrEmptyString($weatherJson->location->name)) {
            $this->location = new ApixuWeatherLocation($weatherJson->location);
        }
        
        if(!IsNullOrEmptyString($weatherJson->current->last_updated)) {
            $this->current = new ApixuWeatherCurrent($weatherJson->current);
        }
        
        /*
        if(!IsNullOrEmptyString($weatherJson->forecast->forecastday[0]->date)) {
            $this->forecast = new ApixuWeatherForecast($weatherJson->forecast);
        }
        */
    }
    
    // Getter
    // -------------------------------------------------------------------------
    
    /**
     * Get the location
     * 
     * @return Location Location from json value
     */
    public function getLocation() {
        return $this->location;
    }
    
    /**
     * Get the current weather
     * 
     * @return Current Current weather
     */
    public function getCurrent() {
        return $this->current;
    }
    
    /**
     * Get forecast weather
     * 
     * @return Forecast Forecast weather
     */
    public function getForecast() {
        return $this->forecast;
    }
    
}
