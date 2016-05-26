<?php

class myClass {
	private $val;
	
	public function __construct($name) {
		$this->val = $name;
	}
	
	public function getVal() {
		return $this->val;
	}
}

$a = new myClass('John');
echo $a->getVal();
$b = new myClass();
echo $b->getVal();
