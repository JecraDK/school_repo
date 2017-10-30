<?php

//
// Author : Jesper Uth Krab
// Made On : Oct 4, 2017 2:20:24 PM  
//

error_reporting(E_ALL);

require_once 'DbP.inc.php';
require_once 'DbH.inc.php';


class City {
    private $name;  
    private $countrycode;  
    private $district; 
    private $population;   
    
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getCountry() {
    return $this->countrycode;
    }
    public function setCountry($countrycode) {
        $this->countrycode = $countrycode;
    }
    
    public function getDistrict() {
        return $this->district;
    }
    public function setDistrict($district) {
        $this->district = $district;
    }
    
    public function getPopulation() {
        return $this->population;
    }
    public function setPopulation($population) {
        $this->population = $population;
    }
}