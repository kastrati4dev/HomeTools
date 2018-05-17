<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ApixuWeatherLocation
 *
 * @author dardan
 */
class ApixuWeatherLocation {
    
    /**
     * @var string Name of location
     */
    private $name;
    /**
     * @var string Region of location
     */
    private $region;
    /**
     * @var string Country of location
     */
    private $country;
    /**
     * @var double Latitude of location
     */
    private $lat;
    /**
     * @var double Longitude of location
     */
    private $lon;
    /**
     * @var string Continent and country of location
     */
    private $tz_id;
    /**
     * @var integer localtime epoch of location
     */
    private $localtime_epoch;
    /**
     * @var string Localtime of location (yyy-mm-dd hh:mm)
     */
    private $localtime;
    
    // Constructor
    // -------------------------------------------------------------------------

    /**
     * Class constructor.
     */
    public function __construct($locationJson) {
        $this->name = $locationJson->name;
        $this->region = $locationJson->region;
        $this->country = $locationJson->country;
        $this->lat = $locationJson->lat;
        $this->lon = $locationJson->lon;
        $this->tz_id = $locationJson->tz_id;
        $this->localtime_epoch = $locationJson->localtime_epoch;
        $this->localtime = $locationJson->localtime;
    }
    
    
    // Getter
    // -------------------------------------------------------------------------
    
    public function getName() { return $this->name; }
    public function getRegion() { return $this->region; }
    public function getCountry() { return $this->country; }
    public function getLat() { return $this->lat; }
    public function getLon() { return $this->lon; }
    public function getTzId() { return $this->tz_id; }
    public function getLocaltimeEpoch() { return $this->localtime_epoch; }
    public function getLocaltime() { return $this->localtime; }

}
