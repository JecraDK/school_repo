<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 18, 2017 11:25:51 AM  
//

error_reporting(E_ALL);

// Generate Sessions
if (!session_id()) {
    session_start();
}

// Define user friendly EOL for better PHP output
if (!defined('EOL')) {
    define('EOL', '<br>', PHP_EOL);
}

$title = "Input TV Data";

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title;?></title>
        <link rel="stylesheet" href=""/>
    </head>
    <body>
        <?php
            printf("<header><h1>%s</h1></header>\n", $title);
        ?>
        <form action="tvsdb.php" 
              method="post" 
              id='deform'
              enctype="multipart/form-data">
            <fieldset>
                <legend>Televisions</legend>
            <p>
                <label for='inch'>Screen Size (in inches)</label><br/>
                <input type='text' id='inch' name='inch'/>
            </p>
            <p>
                <label for='brand'>TV Brand</label><br/>
                <input type="text" id="brand" name="brand"/>
            </p>
            <p>
                <label for='stocklevel'>Amount of Added Items</label><br/>
                <input type="text" id="stocklevel" name="stocklevel"/>
            </p>
            <p>
                <input type="hidden" name="MAX_FILE_SIZE" value="4194304"/>
                <label for='bild'>Image:</label><br/>
                <input type='file' id='bild' name='img'/>
            </p>
            <p>
               <input type='submit' name='butt' value='Upload'/>
            </p>
            </fieldset>
        </form>
    </body>
</html>