<?php

require_once("class.php");

$food = new FoodProduct("Beef");

$food->setPrice(100);

echo "価格を" . $food->getPrice() . "円に設定しました
";

$food->setExpire(30);

echo "賞味期限を" . $food->getExpire() . "日に設定しました
";


