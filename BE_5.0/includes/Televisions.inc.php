<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 18, 2017 11:27:58 AM  
//

error_reporting(E_ALL);

// Generate Sessions
if (!session_id()) {
    session_start();
}

// Define user friendly EOL for better PHP output
if (!defined('EOL')) {
    define('EOL', '<br>', PHP_EOL);
}

class Television implements Sellable {
    private $_screenSize;
    private $_stockLevel;
    
    public function __construct($inch, $stock) {
        $this->_screenSize = $inch;
        $this->_stockLevel = $stock;
    }
    
    public function getScreenSize() {
        return $this->_screenSize;
    }
    public function setScreenSize( $screenSize ) {
        $this->_screenSize = $screenSize;
    }
    public function addStock( $numItems ) {
        $this->_stockLevel += $numItems;
    }
    public function sellItems( $numItems ) {
        $returnVal = false;
        if ($this->_stockLevel >= $numItems) {
            $this->_stockLevel -= $numItems;
            $returnVal = true;
        }
        return $returnVal;
    }
    public function getStockLevel() {
        return $this->_stockLevel;
    }
}