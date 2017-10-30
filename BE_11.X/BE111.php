<?php

function fibonacci ($n) {
    if ($n == 0) {
       Return 0;
    }
    if ($n == 1) {
        return 1;
    }
    else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

print fibonacci(0);
    print "<br>";
print fibonacci(1);
    print "<br>";
print fibonacci(2);
    print "<br>";
print fibonacci(3);
    print "<br>";
print fibonacci(4);
    print "<br>";
print fibonacci(5);
    print "<br>";
print fibonacci(6);
    print "<br>";
print fibonacci(7);
    print "<br>";
print fibonacci(8);
    print "<br>";
print fibonacci(9);
    print "<br>";
print fibonacci(10);
    print "<br>";
print fibonacci(11);
    print "<br>";
print fibonacci(12);
    print "<br>";
print fibonacci(13);
    print "<br>";
print fibonacci(14);
    print "<br>";
print fibonacci(15);
    print "<br>";
print fibonacci(16);
    print "<br>";
print fibonacci(17);
    print "<br>";
print fibonacci(18);
    print "<br>";
print fibonacci(19);
    print "<br>";
print fibonacci(20);
    print "<br>";

?>