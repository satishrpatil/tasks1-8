<?php

class Calculator {

	public function add($splittedArray) {
		$total = 0;
		for($i=0; $i<count($splittedArray); $i++) {
			if($splittedArray[$i] < 1000) {
				$total+=$splittedArray[$i];	
			}
		}
		return $total;
	}

	public function checkArguments($argv) {
		if(count($argv)==2) {
			return 0;
		}
		elseif(count($argv)>2) {
			$splittedArray = explode(',', $argv[2]);
			return $splittedArray;
		}
	}
}

$add = new Calculator();
$splittedArray = $add->checkArguments($argv);
if($splittedArray) {
	echo $add->add($splittedArray);	
}
else {
	echo 0;
}

?>