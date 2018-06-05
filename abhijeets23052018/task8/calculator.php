<?php

class Calculator {

	public function multiply($splittedArray) {
		$total = 1;
		for($i=0; $i<count($splittedArray); $i++) {
			if($splittedArray[$i] < 1000) {
				$total*=$splittedArray[$i];	
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
	echo $add->multiply($splittedArray);	
}
else {
	echo 0;
}

?>