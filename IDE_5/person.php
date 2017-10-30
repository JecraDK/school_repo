<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 19, 2017 11:33:36 AM  
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

class person {
    private $FirstName;
    private $LastName;
    private $Age;
    
    public function getFirstName(){
        return $this->FirstName;
    }
    public function getLastName() {
        return $this->LastName;
    }
    public function getAge() {
        return $this->Age;
    }    
    
        public function setFirstName($FirstName) {
            if(strlen($FirstName) <= 20 && strlen($FirstName) >= 2 && preg_match("/^[A-Za-z'-]*$/", $FirstName)) {
                $this->FirstName = $FirstName;
                echo "First name matches requirements";
            }
            else {
                echo "First name does not meet requirements";
            }
        }
    
        public function setLastName($LastName) {
            if(strlen($LastName) <= 20 && strlen($LastName) >= 2 && preg_match("/^[ A-Za-z'-]*$/", $LastName)) {
                $this->LastName = $LastName;
                echo ", Last name matches requirements";
            }
            else {
                echo ", Last name does not meet requirements";
            }
        }
    
        public function setAge($age) {
            if($age >= 18 && $age <= 65) {
                $this->Age = $age;
                echo ", Age matches requirements.";
            }
            else {
                echo ", Age does not meet requirements.";
            }
        }
}

/*    
$nm = new Person;
    $nm->setFirstName('Jesper');
    $nm->setLastName('Krab');
    $nm->setAge(24);

echo '<br><br>';

echo 'First Name: ';
echo $nm->getFirstName();
echo '<br>';

echo 'Last Name: ';
echo $nm->getLastName();
echo '<br>';

echo 'Age: ';
echo $nm->getAge();
echo '<br>';
 */