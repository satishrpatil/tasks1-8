<?php
	class Calculator {
		public function mul(int $a=0 , int $b=0){
			print $a*$b;
		}
	}
	$cal = new Calculator();

	if(isset($argv[2]) && isset($argv[3])) {
		$cal->mul($argv[2], $argv[3]);
	}
	elseif(isset($argv[2])) {
		$cal->mul($argv[2]);
	}
	else {
		$cal->mul();
	}
?>