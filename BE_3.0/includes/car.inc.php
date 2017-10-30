<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 15, 2017 3:17:58 PM  
//

error_reporting(E_ALL);

class Car extends Vehicle { //here we do, of course, get an error, since no Vehicle class is created anywhere.
    private $doors;
    private $trailer;
    
    public function __construct($brand, $color, $name, $doors, $trailer) {
        parent::__construct($brand, $color, $name);
        $this->doors = $doors;
        $this->trailer = $trailer;
        $this->setType('car');
    }
    
    public function getDoors() {
        return $this->doors;
    }
    
    public function getTrailer() {
        $tr = FALSE;
        if ($this->trailer) {
            $tr = TRUE;
        }
        return $tr;
    }
    
    public function __toString() {
        $t = "no trailer";
        if ($this->getTrailer()) {
            $t = "takes trailer";
        }
        return sprintf("%s, %s, %s\n"
                , parent::__toString()
                , $this->getDoors()
                , $t);
    }
}