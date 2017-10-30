<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 7, 2017 3:43:44 PM  
//

error_reporting(E_ALL);

require_once '../includes/Country.inc.php';
require_once '../includes/Area.inc.php';
require_once '../includes/Inhabitant.inc.php';

//Country Code

$denmark = new Country('DK', 'Danmark', 'Danmark', 'DNK', 1);

printf("<h3>%s</h3>\n", $denmark->getName());

print($denmark);        
        
$denmark->setNumcode(65535);
print($denmark);

// Area Code
             
$ar1 = new Area($denmark, 6000, 290000, 'Kolding');

print("<table>\n");
printf("<tr>%s</tr>\n", $ar1);
print("</table>\n");

// Inhabitant Code

echo "<br>";
       
$pers1 = new Inhabitant(10, ' Julie', ' Krab ', 5000, $denmark, 22);
$pers2 = new Inhabitant(20, ' Josefine', 'Uth ', 6091, $denmark, 18);
$pers3 = new Inhabitant(30, ' Jesper', ' Krab ', 6000, $denmark, 24);
        
print("<table>\n");
printf("<tr>%s</tr>\n", $pers1);
printf("<tr>%s</tr>\n", $pers2);
printf("<tr>%s</tr>\n", $pers3);
print("</table>\n");