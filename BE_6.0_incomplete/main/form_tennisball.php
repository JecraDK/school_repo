<?php
    session_start();
    require_once '../includes/DbP.inc.php';
    require_once '../includes/DbH.inc.php';
    $dbh = DbH::getDbH();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add Television</title>
        <link rel='stylesheet' href='style.css'/>
    </head>
    <body>
        
        <?php
            include '../includes/menu.inc.php';
        ?>

        <h2>Tennisballs</h2>
        <form action="tennisballsdb.php" method="post">
            <table>
                <tr>
                  <td>Color:</td><td><input type="text" name="color" required/></td>
                </tr>
                <tr>
                  <td>Amount:</td><td><input type="text" name="ballsleft"/></td>
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