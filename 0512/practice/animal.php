<?php

/* =-= Welcome to My Zoo! =-= */

class Animal {
	// Animalクラスを継承する方々も使う変数たち
	protected $name, $weight, $type, $hello;
	// すべてのアニマルたちの重さ
	static protected $total_weight = 0,
	// 登録されたアニマルの数
					 $animal_count = 0;

	public function __construct($name, $weight, $type, $hello) {
		$this->type = $type;
		$this->hello = $hello;
		$this->init($name, $weight);
	}

	// アニマルを登録する
	protected function init($name, $weight) {
		$this->name = $name;
		$this->weight = $weight;
		self::$total_weight += $weight;
		self::$animal_count ++;
	}
	
	// アニマルの名前を取得
	public function getName() {
		return $this->name;
	}
	
	// アニマルの体重を取得
	public function getWeight() {
		return $this->weight;
	}
	
	// アニマルからのごあいさつ
	public function sayHello() {
		return $this->hello;
	}
	
	// クラスメソッド的に呼び出される総重量を取得
	public function getTotalWeight() {
		return self::$total_weight;
	}
	
	// 所属するアニマルの数を取得
	public function getAnimalCount() {
		return self::$animal_count;
	}
}

// おさる
class Monkey extends Animal {
	private $age;
	

	public function __construct($name, $weight, $age) {
		$this->type = 'Monkey';
		$this->hello = 'ウッキー！！';
		$this->age = $age;
		$this->init($name, $weight);
	}
	
	// ユニークな受け答え
	public function sayUnique() {
		return "I'm $this->age years.\n";
	}
}

// とら
class Tiger extends Animal {
	private $ate;
	
	public function __construct($name, $weight, $ate) {
		$this->type = 'Tiger';
		$this->hello = 'ガオー!!';
		$this->ate = $ate;
		$this->init($name, $weight);
	}
	
	// ユニークな受け答え
	public function sayUnique() {
		return "I was ate $this->ate animals.\n";
	}
}

// 汎用クラスメソッドたち
class Utilities {
	
	// アニマルのおしゃべり
	public function sayProf($name, $hello) {
		echo 'Hello ' . $name . '! -> ' . $hello . "\n";
	}
}

// ダミーの改行
echo null;

$animals = array();
// おさるのタローくん
//$taro = new Monkey('タロー', 20, 8);
$animals[0] = new Monkey('タロー', 20, 8);
Utilities::sayProf($taro->getName(), $taro->sayHello());
echo $taro->sayUnique();
echo 'Weight : ' . $taro->getWeight() . "kg\n";

// おさるのレナちゃん
$lena = new Monkey('レナ', 14, 1);
Utilities::sayProf($lena->getName(), $lena->sayHello());
echo $lena->sayUnique();
echo 'Weight : ' . $lena->getWeight() . "kg\n";

// とらのカイトくん
$kaito = new Tiger('カイト', 54, 5);
Utilities::sayProf($kaito->getName(), $kaito->sayHello());
echo $kaito->sayUnique();
echo 'Weight : ' . $kaito->getWeight() . "kg\n";

// アニマル浜口くん
$hamaguchi = new Animal('アニマル浜口', null, null, '気合だー!!');
Utilities::sayProf($hamaguchi->getName(), $hamaguchi->sayHello());

// 冗長な記述の簡略化
for(){
	sayProf(

// 動物園の情報を表示
echo 'This Zoo has ' . Animal::getAnimalCount() . " animals.\n";
echo 'Total weight : ' . Animal::getTotalWeight() . "kg\n";
