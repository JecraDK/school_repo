<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 13, 2017 3:29:40 PM  
//

try {
    $dbh = new PDO(DSN, DBUSER, USERPWD);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    printf("<p>Connect failed for following reason: <br/>%s</p>\n",
        $e->getMessage());
}