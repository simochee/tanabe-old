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

$name = $_POST["name"];

$rob = new Robot($name);

$sayName = $rob->getName();

echo "hello $sayName!\n";