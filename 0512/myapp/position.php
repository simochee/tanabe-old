<?php

// これは継承

class Position extends Person {
	
	public function __construct($userInfo) {
		$this->setUserInfo($userInfo);
		$this->setUserPosition($userInfo["position"]);
	}
	
	protected function setUserPosition($userPosition) {
		$this->position = $userPosition;
	}

}
