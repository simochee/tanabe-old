<?php

if(foo() || bar()) {
	echo "True!";
}

function foo() {
	echo "Foo!";
	return true;
}

function bar() {
	echo "Bar!";
	return false;
}
