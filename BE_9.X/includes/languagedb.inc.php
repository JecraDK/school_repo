<?php

//
// Author : Jesper Uth Krab
// Made On : Oct 4, 2017 2:03:02 PM  
//

error_reporting(E_ALL);

    session_start();
    require_once 'DbP.inc.php';
    require_once 'DbH.inc.php';
    require_once 'language.inc.php';
    $dbh = DbH::getDbH();

foreach($_POST as $key => $value) {
        $$key = trim($value);
    }
    $countrylanguage = new CountryLanguage();
    $countrylanguage->setCountry($countrycode);
    $countrylanguage->setLanguage($language);
    $countrylanguage->setOfficial($official);
    
    $sql = 'insert into countrylanguage (countrycode, language, isofficial) values (:countrycode, :language, :official);';
    try {
      $q = $dbh->prepare($sql);
      $q->bindValue(':countrycode', $countrylanguage->getCountry());
      $q->bindValue(':language', $countrylanguage->getLanguage());
      $q->bindValue(':official', $countrylanguage->getOfficial());
      $q->execute();
    } catch(PDOException $e) {
      die("Posting failed. Call a friend.<br/>".$e->getMessage());
    }
    header('Location: ../index.php?inserted');

