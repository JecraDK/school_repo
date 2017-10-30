<?php
    require_once '../includes/DbP.inc.php';
    require_once '../includes/DbH.inc.php';
    require_once '../includes/Sellable.inc.php';
    require_once '../includes/Television.inc.php';
    $dbh = DbH::getDbH();
    
    foreach($_POST as $key => $value) {
        $$key = trim($value);  // vars with names as in form
    }
    $tv = new Television($inch, $tvno);
    
    $sql = 'insert into tvs values(:inch, :number);';
    try {
      $q = $dbh->prepare($sql);
      $q->bindValue(':inch', $tv->getScreenSize());
      $q->bindValue(':number', $tv->getStockLevel());
      $q->execute();
    } catch(PDOException $e) {
      die("Posting failed. Call a friend.<br/>".$e->getMessage());
    }
    header('Location: ./form_uploads.php?inserted');
