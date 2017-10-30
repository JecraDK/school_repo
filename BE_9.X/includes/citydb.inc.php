<?php

//
// Author : Jesper Uth Krab
// Made On : Oct 4, 2017 2:03:02 PM  
//

error_reporting(E_ALL);

    session_start();
    require_once 'DbP.inc.php';
    require_once 'DbH.inc.php';
    require_once 'city.inc.php';
    $dbh = DbH::getDbH();

foreach($_POST as $key => $value) {
        $$key = trim($value);
    }
    $city = new City();
    $city->setName($name);
    $city->setCountry($countrycode);
    $city->setDistrict($district);
    $city->setPopulation($population);
    
    $sql = 'insert into city (name, countrycode, district, population) values (:name, :countrycode, :district, :population);';
    try {
      $q = $dbh->prepare($sql);
      $q->bindValue(':name', $city->getName());
      $q->bindValue(':countrycode', $city->getCountry());
      $q->bindValue(':district', $city->getDistrict());
      $q->bindValue(':population', $city->getPopulation());
      $q->execute();
    } catch(PDOException $e) {
      die("Posting failed. Call a friend.<br/>".$e->getMessage());
    }
    header('Location: ../index.php?inserted');

