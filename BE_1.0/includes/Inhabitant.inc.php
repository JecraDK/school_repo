<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 7, 2017 3:56:47 PM  
//

error_reporting(E_ALL);

class Inhabitant {
    private $ssn;
    private $firstname;
    private $surname;
    private $zipcode;
    private $country;
    private $taxpct;
    
    public function __construct($ssn, $firstname, $surname
                              , $zipcode, $country, $taxpct) {
        $this->ssn = $ssn;
        $this->firstname = $firstname;
        $this->surname = $surname;
        $this->zipcode = $zipcode;
        $this->country = $country;
        $this->taxpct = $taxpct;
    }
    
    public function getSsn() {
        return $this->ssn;
    }
    
    public function getTaxPct() {
        return $this->taxpct;
    }
    
    public function setTaxPct($tax) {
        $this->taxpct = $tax;
    }
    
    public function __toString() {
        return sprintf("<td>%s</td><td>%s</td><td>%s</td>"
                . "<td>%s</td><td>%s</td><td>%s</td>\n"
                , $this->getSsn(), $this->firstname, $this->surname
                , $this->zipcode, $this->country->getName(), $this->getTaxPct());
    }
}