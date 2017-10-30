<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 19, 2017 8:52:57 AM  
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

class calculator {
    
    /**
     * 
     * @assert (0,0)==0
     * @assert (0,1)==1
     * @assert (1,1)==2
     * @assert (2,2)==4
     * 
     */
    
    public function add($val1, $val2) {
        return $val1 + $val2;
    }
    
    /**
     * 
     * @assert (0,0)==0
     * @assert (0,1)==-1
     * @assert (1,1)==0
     * @assert (2,2)==0
     * 
     */
    
    public function sub($val1, $val2) {
        return $val1 - $val2;
    }
}