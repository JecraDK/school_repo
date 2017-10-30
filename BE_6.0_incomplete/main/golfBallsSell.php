<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 20, 2017 12:35:03 PM  
//

error_reporting(E_ALL);

require_once '../includes/DbP.inc.php';
    require_once '../includes/DbH.inc.php';
    require_once '../includes/Sellable.inc.php';
    require_once '../includes/Golfball.inc.php';
    $dbh = DbH::getDbH();
    $title = 'Display Golfballs for Sale';
    
    $sql  = "select color, dimples, noinstock";
    $sql .= " from golfballs";
    $sql .= " order by color, dimples";
    $r = $dbh->query($sql);
    $a = array();
    while ($out = $r->fetch()) {
        $g = new GolfBall();
        $g->setColor($out['color']);
        $g->setDimples($out['dimples']);
        $g->addStock($out['noinstock']);
        array_push($a, $g);
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title;?></title>
    </head>
    <body>
<?php
    printf("    <header><h1>%s</h1></header>\n", $title);
    print("    <table>\n");
    foreach ($a as $gb) {
        print($gb);
    }
    print("    </table>\n");
?>
    </body>
</html>
