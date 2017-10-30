<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 20, 2017 11:19:34 AM  
//

error_reporting(E_ALL);

class StoreManager {
    private $_productList = array();
    
    public function addProduct(Sellable $product) {
        $this->_productList[] = $product;
    }
    
    public function stockUp() {
        foreach ( $this->_productList as $product ) {
            $product->addStock(100);
        }
    }
}