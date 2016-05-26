<?php

class Person {
	private $name = '';
	
	public function __construct($name) {
		$this->setName($name);
	}
	
	public function setName($name) {
		$this->name = trim($name);
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function sayHello() {
		echo 'Hello! I\'m ' . $this->name . '!';
	}
}
