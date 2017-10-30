<?php
    require_once '../includes/DbP.inc.php';
    require_once '../includes/DbH.inc.php';
    require_once '../includes/Sellable.inc.php';
    require_once '../includes/TennisBall.inc.php';
    $dbh = DbH::getDbH();
    
    foreach($_POST as $key => $value) {
        $$key = trim($value);  // vars with names as in form
    }
    $tv = new TennisBall($color, $ballsleft);
    
    $sql = 'insert into tennisballs values(:color, :number);';
    try {
      $q = $dbh->prepare($sql);
      $q->bindValue(':color', $tv->getColor());
      $q->bindValue(':number', $tv->getStockLevel());
      $q->execute();
    } catch(PDOException $e) {
      die("Posting failed. Call a friend.<br/>".$e->getMessage());
    }
    header('Location: ./form_uploads.php?inserted');
