<?php
require_once('person.php');

$fkoji = new Person('fkoji');
$simo = new Person('simochee');

$fkoji->sayHello();
$simo->sayHello();