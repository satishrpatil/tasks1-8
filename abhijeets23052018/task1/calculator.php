<?php

class Calculator {
	
    public function sum(int $a=0, int $b=0) {
        print $a+$b;
    }
}

$sum = new Calculator();

if(isset($argv[2]) && isset($argv[3])) {
	$sum->sum($argv[2], $argv[3]);
}
elseif(isset($argv[2])) {
	$sum->sum($argv[2]);
}
else {
	$sum->sum();
}

?>