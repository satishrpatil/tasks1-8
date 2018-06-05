<?php

class Calculator {

	public function add($splittedArray) {
		$total = 0;
		for($i=0; $i<count($splittedArray); $i++) {
			if($splittedArray[$i] < 0) {
				$negativeNo .= $splittedArray[$i]. ',';
			}
		}
		throw new Exception("Negative numbers { $negativeNo } not allowed");
	}

	public function checkArguments($argv) {
		if(count($argv)==2) {
			return 0;
		}
		elseif(count($argv)>2) {
			$str=trim(preg_replace('/\s\s+/', '', stripslashes($argv[2])));
			$splittedArray = explode(',', $str);
			return $splittedArray;
		}
	}
}
	
$add = new Calculator();
$splittedArray = $add->checkArguments($argv);
try{
	if($splittedArray) {
		 $add->add($splittedArray);	
	}
	else {
		echo 0;
	}	
}

catch(Exception $e) {
  echo 'Error: ' .$e->getMessage();
}
?>