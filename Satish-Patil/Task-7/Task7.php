<?php 

require('../Calculator.php');
class Task7 extends Calculator {

    public function add($args = []) {
        $sum = 0;
        $negative_array = [];
        if(is_array($args)) {
            for($i= 0; $i < count($args); $i++) {
                if(0 < ($args[$i])) {
                    if($args[$i] <= 1000) {
                        $sum += $args[$i] ??  0;
                     }
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

$task7 = new Task7();
$arguments = isset($argv[2]) && !empty($argv[2]) ? explode(",", preg_replace('/^-?[0-9]{1,4}$/', ',', $argv[2])) : [];
echo $task7->add($arguments);

?>