<?php

namespace Domain;

class Measure {
    
    public $id;
    
    public $temperature;
    
    public $humidite;
    
    public $datetime;
    
    
    public function __construct($id, $temperature, $humidite, $datetime) {
        
        $this->id = $id;
        $this->temperature = $temperature;
        $this->humidite = $humidite;
        $this->datetime = $datetime;
    }    
}
