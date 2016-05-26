<?php

class Robot {
  private $name = '';
  public function __construct($name) {
    $this->setName($name);
  }
  public function setName($name) {
    $this->name = (String)filter_var($name);
  }
  public function getName() {
    return $this->name;
  }
}

$a = new Robot('Robo Taro');

echo $a->getName();