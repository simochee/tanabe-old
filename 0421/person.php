<?php
class Person {
  private $name = '';

  public function __construct($name) {
    $this->setName($name);
  }

  public function __destruct() {
    echo "See you!\n";
  } 
  
  public function setName($name) {
    $this->name = trim($name);
  }

  public function sayHello() {
    echo "HEllo! Your $this->name.\n";
  }
}