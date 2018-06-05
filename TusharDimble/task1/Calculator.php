<?php
	class Calculator {
		public function add(int $a=0, int $b=0){
			//echo $a;echo $b;exit;
			print $a+$b;
		}
	}
	$add = new Calculator();

	if(isset($argv[2]) && isset($argv[3])) {
		$add->add($argv[2],$argv[3]);
	}
	elseif(isset($argv[2])) {
		$add->add($argv[2]);
	}
	else {
		$add->add();
	}
?>