<?php
    require_once './includes/TelevisionI.inc.php';
    require_once './includes/Television.inc.php';   // the model
    require_once './includes/TelevisionV1.inc.php'; // a view
    require_once './includes/TelevisionRC.inc.php'; // a controller
    require_once './includes/DbP.inc.php';
    require_once './includes/DbH.inc.php';
    require_once './includes/Media.inc.php';
    $dbh = DbH::getDbH();
    
    foreach($_POST as $key => $value) {
        $$key = trim($value);  // vars with names as in form
    }
    $tv = new media($channel, $mimetype, $media);
    
    $sql = 'insert into media values(:channel, :mimetype, :media);';
    try {
      $q = $dbh->prepare($sql);
      $q->bindValue(':media', $tv->getUrl());
      $q->bindValue(':mimetype', $tv->getMimeType());
      $q->execute();
    } catch(PDOException $e) {
      die("Posting failed. Call a friend.<br/>".$e->getMessage());
    }
    header('Location: ./form_insert.php?inserted');
