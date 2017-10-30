<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 20, 2017 12:26:46 PM  
//

error_reporting(E_ALL);

class GolfBall implements Sellable {
    private $color;
    private $noinstock;
    private $dimples;

    public function getColor() {
        return $this->color;
    }
    
    public function setColor( $color ) {
        $this->color = $color;
    }

    public function getDimples() {
        return $this->dimples;
    }
    
    public function setDimples( $no ) {
        $this->dimples = $no;
    }
    
    public function addStock( $numItems ) {
        $this->noinstock += $numItems;
    }
   
    public function sellItems($n) {
        $returnVal = false;
        if ( $this->noinstock >= $n ) {
            $this->noinstock -= $n;
            $returnVal = true;
        }
        return $returnVal;
    }

    public function getStockLevel() {
        return $this->noinstock;
    }
    
    public function __toString() {
        $s = '';
        $s .= sprintf("        <tr><td>%s</td>"
                . "<td>%s</td>"
                . "<td><img src='getImage.php?color=%s&amp;dimples=%s' width='320' height='240'/></td>"
                . "<td>%s</td></tr>\n"
                , $this->getColor()
                , $this->getDimples()
                , $this->getColor()
                , $this->getDimples()
                , $this->getStockLevel());
        return $s;
    }

    public function sellItem() {
        
    }

}
