<?php

//
// Author : Jesper Uth Krab
// Made On : Sep 19, 2017 12:53:04 PM  
//


use PHPUnit\Framework\TestCase;
require '../person.php';

class PersonTest extends TestCase {
    protected $object;
    
    protected function setUp(){
        $this->object = new Person;
    }
    
    // @covers Person::setFirstName, testing for correct name
    
    public function testSetFirstNameTrue(){
        $fn = 'Jesper';
        $this->object->setFirstName($fn);
        $this->assertEquals($fn, $this->object->getFirstName());
    }
    public function testSetFirstNameFalse(){
        $fn = '1';
        $this->object->setFirstName($fn);
        $this->assertEquals($fn, $this->object->getFirstName());
    }
    
    // @covers Person::setLastName, testing for correct name
    
    public function testSetLastNameTrue(){
        $ln = 'Krab';
        $this->object->setLastName($ln);
        $this->assertEquals($ln, $this->object->getLastName());
    }
    public function testSetLastNameFalse(){
        $ln = '2';
        $this->object->setFirstName($ln);
        $this->assertEquals($ln, $this->object->getFirstName());
    }
    
    // @covers Person::setAge, testing for correct age
    
    public function testSetAgeTrue(){
        $age = 24;
        $this->object->setAge($age);
        $this->assertEquals($age, $this->object->getAge());
    }
    public function testSetAgeFalse(){
        $age = 12;
        $this->object->setAge($age);
        $this->assertEquals($age, $this->object->getAge());
    }
}