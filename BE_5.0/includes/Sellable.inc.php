<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 19, 2017 7:45:02 AM  
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
interface Sellable {
    public function addStock( $numItems );
    public function sellItems( $numItems );
    public function getStockLevel();
}