<?php

function power ($n, $p) {
    if ($p == 0) {
        return 1;
    }
    else {
        return $n * power($n, $p -1);
    }
}

print power (2, 7);
    print "<br>";
print power (-3, 3);
    print "<br>";
print power (11, 0);
    print "<br>";
print power (20, 3);
    print "<br>";

?>