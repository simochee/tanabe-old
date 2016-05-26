<?php

class Product {
	protected $name;
	protected $price;
	
	public function __construnct($name) {
		$this->name = $name;
	}
	
	public function getPrice() {
		return $this->price;
	}
	
	public function setPrice($price) {
		$this->price = $price;
	}
}

class FoodProduct extends Product {
	private $expire;
	
	public function setExpire($expire) {
		$this->expire = $expire;
	}
	
	public function getExpire() {
		return $this->expire;
	}
}