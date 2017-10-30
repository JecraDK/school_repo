<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 24, 2017 11:06:12 AM  
//

error_reporting(E_ALL);

    session_start();
    require_once '../includes/Authentication.inc.php';
    
    if (Authentication::isAuthenticated()) {
        Authentication::Logout();
    }
    header('Location: ./index.php?notAuth');
