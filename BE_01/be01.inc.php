<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 5, 2017 9:40:51 PM  
//

error_reporting(E_ALL);

foreach($_POST as $key => $val) {
    if ($key != 'sub') {
        if (! is_numeric($val)) {
            header("Location: ./be01.php");
        }
        $$key = (int)$val;
    }
}
$maximal = $no1;
    if ($no2 > $maximal) $maximal = $no2;
    if ($no3 > $maximal) $maximal = $no3;
        printf("the biggest number is: %s<br>", $maximal);
?>
