<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 6, 2017 10:25:10 PM  
//

error_reporting(E_ALL);

$myArray = array();
foreach($_POST as $key => $val) {
    if ($key != 'sub') {
        if (! is_numeric($val)) {
            continue;
        }
        $myArray[] = (int)$val;
    }
}
$minValue = min($myArray);
$maxValue = max($myArray);

printf("The smallest number is: %s<br>", $minValue);
printf("The largest number is: %s<br>", $maxValue);

?>