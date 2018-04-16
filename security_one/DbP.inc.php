<?php
abstract class DbP {
    const DBHOST = '127.0.0.1';
    const DBUSER = 'root';
    const USERPWD = '';
    const DB = 'yaddasecvariant';
    const DSN = "mysql:host=".self::DBHOST.";dbname=".self::DB;
}
