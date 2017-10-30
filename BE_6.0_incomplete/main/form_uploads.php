<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 22, 2017 7:19:27 PM  
//

error_reporting(E_ALL);

    session_start();
    require_once '../includes/DbP.inc.php';
    require_once '../includes/DbH.inc.php';
    require_once '../includes/Authentication.inc.php';
    $dbh = DbH::getDbH();

    if (!Authentication::isAuthenticated()) {  // am I logged on?
        header("Location: ./index.php"); // if not, go away!
    }

?>
<html>
    <head>
        <title>INPUT DATA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            include '../includes/menu.inc.php';
        ?>
    <table>
        <tr>
            <td>
                <a href="form_golfball.php"><h2>Input Golfball Data</h2></a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="form_tennisball.php"><h2>Input Tennisball Data</h2></a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="form_television.php"><h2>Input Television Data</h2></a>
            </td>
        </tr>
    </table>
    </body>
</html>
