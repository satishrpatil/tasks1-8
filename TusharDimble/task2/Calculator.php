<?php
	class Calculator{
		public function add($aINum) {
			$total = 0;
			for($i=0; $i<count($aINum); $i++) {
				$total+=$aINum[$i];
			}
			return $total;
		}

		public function check($argv) {
			if(count($argv)==2) {
				return 0;
			}
			elseif(count($argv)>2) {
				$aINum = explode(',', $argv[2]);
				return $aINum;
			}
		}
	}

	$add = new Calculator();
	$aINum = $add->check($argv);
	if($aINum) {
		echo $add->add($aINum);	
	}
	else {
		echo 0;
	}
?>