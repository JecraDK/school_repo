<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 18, 2017 11:27:58 AM  
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

 if (!(
          (isset($_POST['inch']) && $_POST['inch'] != '')
            && (isset($_POST['brand']) && $_POST['brand'] != '')
            && (isset($_POST['stocklevel']) && $_POST['stocklevel'] != '')
//          && (isset($_FILES['img']) && $_FILES['img']['size'] > 0)
        )) {
        header("Location: ./input_data.php?x=1");
    }
    
    require_once '../includes/dbparams.inc.php';
    require_once '../includes/dbconnect.inc.php';
    require_once '../includes/Sellable.inc.php';
    require_once '../includes/Televisions.inc.php';
    $dbh = DbH::getDbH();
    
    foreach($_POST as $key => $value) {
        $$key = trim($value);  // vars with names as in form
    }
    $gb = new Television();
    $gb->setInch($inch);
    $gb->addStocklevel(100);

    // Temporary file name stored on the server
    // Read in one gulp and addslashes
    $image = addslashes(file_get_contents($_FILES['img']['tmp_name']));
    $imagetype = $_FILES['img']['type'];
    
    $sql = 'start transaction;';
    $dbh->query($sql);
    
    $sql = 'insert into televisions values(:inch, :number);';
    try {
      $q = $dbh->prepare($sql);
      $q->bindValue(':number', $gb->getStocklevel());
      $q->bindValue(':inch', $gb->getInch());
      $q->execute();
    } catch(PDOException $e) {
      die("Posting failed.<br/>".$e->getMessage());
    }

    $sql = 'insert into image values(:inch, :mimetype, :imageitself);';
    try {
      $q = $dbh->prepare($sql);
      $q->bindValue(':inch', $gb->getInch());
      $q->bindValue(':mimetype', $imagetype);
      $q->bindValue(':imageitself', $image);
      $q->execute();
    } catch (Exception $e) {
      die("Posting of image failed.<br/>".$e->getMessage());
    }
    
    $sql = 'commit;';
    $dbh->query($sql);
    header('Location: ./input_data.php?inserted');
    