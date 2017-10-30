<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 20, 2017 11:17:00 AM  
//

error_reporting(E_ALL);

interface Sellable {
    public function addStock( $numItems );
    public function sellItem();
    public function getStockLevel();
}
