<?php
	class Calculator{
		public function add($splittedArray) {
			$total = 0;
			for($i=0; $i<count($splittedArray); $i++) {
				$total+=$splittedArray[$i];
			}
			return $total;
		}

		public function checkArguments($argv) {
			if(count($argv)==2) {
				return 0;
			}
			elseif(count($argv)>2) {
				$str=trim(preg_replace('/\s\s+/', '', $argv[2]));
				$splittedArray = explode(',', $str);
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