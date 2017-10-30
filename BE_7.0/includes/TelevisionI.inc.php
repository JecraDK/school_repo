<?php

//
// Author : Jesper Uth Krab
// Made On : Oct 2, 2017 10:04:51 AM  
//

error_reporting(E_ALL);

interface TelevisionI {
    public function tvOnOff();
    public function chUp();
    public function chDown();
    public function volUp();
    public function volDown();
    public function mute();
}
