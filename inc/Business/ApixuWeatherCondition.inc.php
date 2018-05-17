<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ApixuWeatherCondition
 *
 * @author dardan
 */
class ApixuWeatherCondition {
    /**
     * @var string Text of condition
     */
    private $text;
    /**
     * @var string Icon of condition
     */
    private $icon;
    /**
     * @var integer Code of condition
     */
    private $code;
    
    // Constructor
    // -------------------------------------------------------------------------

    /**
     * Class constructor.
     */
    public function __construct($conditionJson) {
        $this->text = $conditionJson->text;
        $this->icon = $conditionJson->icon;
        $this->code = $conditionJson->code;
    }
    
    
    // Getter
    // -------------------------------------------------------------------------
    
    public function getText() { return $this->text; }
    public function getIcon() { return $this->icon; }
    public function getCode() { return $this->code; }
}

?>