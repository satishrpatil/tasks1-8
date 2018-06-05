<?php 

require('../Calculator.php');
class Task6 extends Calculator {

    public function add($args = []) {
        $sum = 0;
        $negative_array = [];
        if(is_array($args)) {
            for($i= 0; $i < count($args); $i++) {
                if(0 < ($args[$i])) {
                   $sum += $args[$i] ??  0;
                } else {
                    $negative_array[] = $args[$i];
                }
            }
        }


        if(count($negative_array)) {
            return "Negative numbers [".implode(",", $negative_array)."] not allowed";
        }
        return "sum is ".$sum. " ";
    }
}

$task6 = new Task6();
$arguments = isset($argv[2]) && !empty($argv[2]) ? explode(",", preg_replace('/^-?[0-9]{1,4}$/', ',', $argv[2])) : [];
echo $task6->add($arguments);

?>