<?php

//
// Author : Jesper Uth Krab
// Made On : Oct 4, 2017 2:20:24 PM  
//

error_reporting(E_ALL);

require_once 'DbP.inc.php';
require_once 'DbH.inc.php';


class CountryLanguage {
    private $countrycode;  
    private $language; 
    private $official;   
    
    
    public function getCountry() {
    return $this->countrycode;
    }
    public function setCountry($countrycode) {
        $this->countrycode = $countrycode;
    }
    
    public function getLanguage() {
        return $this->language;
    }
    public function setLanguage($language) {
        $this->language = $language;
    }
    
    public function getOfficial() {
        return $this->official;
    }
    public function setOfficial($official) {
        $this->official = $official;
    }
}