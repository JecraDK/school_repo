<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 7, 2017 3:48:08 PM  
//

error_reporting(E_ALL);

class Country {
    private $iso;
    private $name;
    private $printable_name;
    private $iso3;
    private $numcode;
    
    public function __construct($iso, $name, $namep, $iso3, $numcode) {
        $this->iso = $iso;
        $this->name = $name;
        $this->printable_name = $namep;
        $this->iso3 = $iso3;
        $this->numcode = $numcode;        
    }
    
    public function getIso() {
        return $this->iso;
    }
    
    public function getIso3() {
        return $this->iso3;
    }
    
    public function getName() {
        return $this->printable_name;
    }
    
    public function getNumcode() {
        return $this->numcode;
    }
    
    public function setNumcode($numcode) {
        $this->numcode = $numcode;
    }
    
    public function __toString() {
        $s = sprintf("<p>Country: %s<br/>No: %s<br/>Name: %s</p>\n"
                , $this->getIso(), $this->getNumcode(), $this->getName());
        return $s;
    }
}