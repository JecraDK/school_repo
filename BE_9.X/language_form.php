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
        <title>Add Language</title>
    </head>
    <body>
        <?php
        include_once './includes/menu.inc.php';
        ?>
        <h2>Add Language To Database</h2>
        <form action="./includes/languagedb.inc.php" method="post">
            <table>
                <tr>
                  <td>Country Code</td><td><input type="text" name="countrycode" required/></td>
                </tr>
                <tr>
                  <td>Language</td><td><input type="text" name="language" required/></td>
                </tr>
                <tr>
                  <td>Official Language yes/no</td><td><input type='checkbox' name='official'/></td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <input type="submit" value="OK"/>
                  </td>
                </tr>
            </table>
          </form>
  </body>
</html>