<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 7, 2017 3:53:07 PM  
//

error_reporting(E_ALL);

class Area {
    private $country;
    private $zipcode;
    private $population;
    private $name;
    
    public function __construct($country, $zipcode, $population, $name) {
        $this->country = $country;
        $this->zipcode = $zipcode;
        $this->population = $population;
        $this->name = $name;
    }
    
    public function getPopulation() {
        return $this->population;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function __toString() {
        return sprintf("<td>%s</td><td>%s</td><td>%s</td>"
                . "<td>%s</td>\n"
                , $this->getName(), $this->country->getName()
                , $this->zipcode, $this->getPopulation());
    }
}