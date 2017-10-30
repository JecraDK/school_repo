<?php
    session_start();
    require_once './includes/DbP.inc.php';
    require_once './includes/DbH.inc.php';
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

        <h2>Television Video</h2>
            <form action="mediadb.php" method="post">
            <table>
                <tr>
                  <td>Channel</td><td><input type="text" name="channel" required/></td>
                </tr>
                <tr>
                  <td>Mimetype</td><td><input type="text" name="mimetype" required/></td>
                </tr>
                <tr>
                  <td>Media</td><td><input type='file' id='bild' name='media' required/></td>
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