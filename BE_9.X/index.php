<?php

//
// Author : Jesper Uth Krab
// Made On : Oct 4, 2017 2:14:23 PM  
//

error_reporting(E_ALL);

    session_start();
    require_once './includes/DbP.inc.php';
    require_once './includes/DbH.inc.php';
    $dbh = DbH::getDbH();

include_once './includes/menu.inc.php';

        $sql  = "select name,  countrycode, district, population";
        $sql .= " from city";
        $r = $dbh->query($sql);
        
        echo '<br><br>';
        echo '<h3>City Info</h3>';
        echo '<br>';
        
        foreach ($r as $sql){
                  echo '<p>Name: '.$sql['name'].'</p>';
                  echo '<p>Country Code: '.$sql['countrycode'].'</p>';
                  echo '<p>District: '.$sql['district'].'</p>';
                  echo '<p>Population: '.$sql['population'].'</p>';
                  echo '<br>';
                  // Create vote function within buttons here
        }