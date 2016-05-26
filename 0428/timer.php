<?php

class Timer {
	private $sTime;
	public function __construct() {
		$this->sTime = new Datetime();
	}
	
	public function __destruct() {
		return $this->sTime->sub(new Datetime());
	}
}