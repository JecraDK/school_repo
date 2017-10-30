<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 20, 2017 12:30:31 PM  
//

error_reporting(E_ALL);

class DbH extends DbP {
    private static $dbh;

    private function __construct() {}

    public static function getDbH() {
        if (empty(self::$dbh)) {
            try {
                self::$dbh = new PDO('mysql:host='.DbP::DBHOST.';dbname='.DbP::DB, DbP::DBUSER, DbP::USERPWD);
                self::$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die(sprintf("<p>Connect failed for following reason: <br/>%s</p>\n",
                  $e->getMessage()));
            }
        }         
        return self::$dbh;
    }
}