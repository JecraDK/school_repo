<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 20, 2017 11:18:04 AM  
//

error_reporting(E_ALL);

class Television implements Sellable {
    private $_screenSize;
    private $_stockLevel;

    public function getScreenSize() {
        return $this->_screenSize;
    }
    public function setScreenSize( $screenSize ) {
        $this->_screenSize = $screenSize;
    }
    public function addStock( $numItems ) {
        $this->_stockLevel += $numItems;
    }
    public function sellItem() {
        $returnVal = false;
        if ( $this->_stockLevel > 0 ) {
            $this->_stockLevel--;
            $returnVal = true;
        }
        return $returnVal;
    }
    public function getStockLevel() {
        return $this->_stockLevel;
    }
}