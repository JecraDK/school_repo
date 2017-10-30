<?php

function factorial($number) { 

    if ($number <= 0) { 
        return 1; 
    } else {
        return ($number * factorial($number-1));
    } 
}

print factorial (3);
    print "<br>";
print factorial (4);
    print "<br>";
print factorial (5);
    print "<br>";
print factorial (6);
    print "<br>";
print factorial (7);
    print "<br>";
print factorial (8);
    print "<br>";
print factorial (9);
    print "<br>";
print factorial (10);
    print "<br>";
print factorial (11);
    print "<br>";
print factorial (12);
    print "<br>";
print factorial (13);
    print "<br>";
print factorial (14);
    print "<br>";
print factorial (15);
    print "<br>";
print factorial (16);
    print "<br>";
print factorial (17);
    print "<br>";
print factorial (18);
    print "<br>";
print factorial (19);
    print "<br>";
print factorial (20);
    print "<br>";

?>