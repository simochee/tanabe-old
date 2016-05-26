<?php
// person: 社員の属性を設定する（name, sex, birth, join, lv, position）

class Person {
	protected name, sex, birth, age, join, lv, position;
	
	public function __construct($userInfo) {
		$this->setUserInfo($userInfo);
	}
	
	protected function setUserInfo($userInfo) {
		$this->name = $userInfo["name"];
		$this->sex = $userInfo["sex"];
		$this->birth = $userInfo["birth"];
		$this->age = substr($this->birth, 0, 4) - date('Y');
		$this->join = $userInfo["join"] == null ? -1 : $userInfo["join"];
		$this->lv = $userInfo["lv"] == null ? -1 : $userInfo["lv"];
	}
	
}
