<?php

include $_SERVER["DOCUMENT_ROOT"] . '/HomeTools/inc/Business/ApixuWeatherCondition.inc.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ApixuWeatherCurrent
 *
 * @author dardan
 */

class ApixuWeatherCurrent {
    /**
     * @var integer Last updated epoch
     */
    private $lastUpdatedEpoch;
    /**
     * @var string Last updated
     */
    private $lastUpdated;
    /**
     * @var double Temperature in celsius
     */
    private $tempC;
    /**
     * @var double Temperature in fahrenheit
     */
    private $tempF;
    /**
     * @var boolean Is day
     */
    private $isDay;
    /**
     * @var ApixuWeatherCondition Table of conditions
     */
    private $condition;
    /**
     * @var double Speed of wind (mph)
     */
    private $windMph;
    /**
     * @var double Pressure of wind
     */
    private $windKph;
    /**
     * @var integer Degree of wind
     */
    private $windDegree;
    /**
     * @var string Direction of wind
     */
    private $windDir;
    /**
     * @var integer Pressure mb
     */
    private $pressureMb;
    /**
     * @var double Pressure in
     */
    private $pressureIn;
    /**
     * @var double Precipitation mm
     */
    private $precipMm;
    /**
     * @var double Precipitation in
     */
    private $precipIn;
    /**
     * @var integer Humidity in percent
     */
    private $humidity;
    /**
     * @var integer Cloud in percent
     */
    private $cloud;
    /**
     * @var double Feel slike in celsius
     */
    private $feelSlikeC;
    /**
     * @var double Feel slike in fahrenheit
     */
    private $feelSlikeF;
    /**
     * @var integer Vis in km
     */
    private $visKm;
    /**
     * @var integer Vis in miles
     */
    private $visMiles;
    
    
    // Constructor
    // -------------------------------------------------------------------------

    /**
     * Class constructor.
     */
    public function __construct($currentJson) {
        $this->lastUpdatedEpoch = $currentJson->last_updated_epoch;
        $this->lastUpdated = $currentJson->last_updated;
        $this->tempC = $currentJson->temp_c;
        $this->tempF = $currentJson->temp_f;
        
        if($currentJson->is_day == 1) {
            $this->isDay = true;
        } else {
            $this->isDay = false;
        }
        
        $this->condition = new ApixuWeatherCondition($currentJson->condition);        
        $this->windMph = $currentJson->wind_mph;
        $this->windKph = $currentJson->wind_kph;
        $this->windDegree = $currentJson->wind_degree;
        $this->windDir = $currentJson->wind_dir;
        $this->pressureMb = $currentJson->pressure_mb;
        $this->pressureIn = $currentJson->pressure_in;
        $this->precipMm = $currentJson->precip_mm;
        $this->precipIn = $currentJson->precip_in;
        $this->humidity = $currentJson->humidity;
        $this->cloud = $currentJson->cloud;
        $this->feelSlikeC = $currentJson->feelslike_c;
        $this->feelSlikeF = $currentJson->feelslike_f;
        $this->visKm = $currentJson->vis_km;
        $this->visMiles = $currentJson->vis_miles;
    }
    
    
    // Getter
    // -------------------------------------------------------------------------
    
    public function getLastUpdatedEpoch() { return $this->lastUpdatedEpoch; }
    public function getLastUpdated() { return $this->lastUpdated; }
    public function getTempC() { return $this->tempC; }
    public function getTempF() { return $this->tempF; }
    public function getIsDay() { return $this->isDay; }
    public function getIsDayString() { return ($this->isDay ? 'Il fait jour' : 'Il fait nuit'); }
    public function getCondition() { return $this->condition; }
    public function getWindMph() { return $this->windMph; }
    public function getWindKph() { return $this->windKph; }
    public function getWindDegree() { return $this->windDegree; }
    public function getWindDir() { return $this->windDir; }
    public function getPressureMb() { return $this->pressureMb; }
    public function getPressureIn() { return $this->pressureIn; }
    public function getPrecipMm() { return $this->precipMm; }
    public function getPrecipIn() { return $this->precipIn; }
    public function getHumidity() { return $this->humidity; }
    public function getCloud() { return $this->cloud; }
    public function getFeelSlikeC() { return $this->feelSlikeC; }
    public function getFeelSlikeF() { return $this->feelSlikeF; }
    public function getVisKm() { return $this->visKm; }
    public function getVisMiles() { return $this->visMiles; }

}

?>