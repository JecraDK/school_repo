<?php

//
// Author : Jesper Uth Krab
// Made On : Oct 4, 2017 2:03:35 PM  
//

error_reporting(E_ALL);

    session_start();
    require_once './includes/DbP.inc.php';
    require_once './includes/DbH.inc.php';
    $dbh = DbH::getDbH();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add City</title>
    </head>
    <body>
        <?php
        include_once './includes/menu.inc.php';
        ?>
        <h2>Add City To Database</h2>
        <form action="./includes/citydb.inc.php" method="post">
            <table>
                <tr>
                  <td>Name</td><td><input type="text" name="name" required/></td>
                </tr>
                <tr>
                  <td>Country Code</td><td><input type="text" name="countrycode" required/></td>
                </tr>
                <tr>
                  <td>District</td><td><input type='text' name='district' required/></td>
                </tr>
                <tr>
                  <td>Population</td><td><input type='text' name='population' required/></td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <input type="submit" value="Submit"/>
                  </td>
                </tr>
            </table>
          </form>
  </body>
</html>