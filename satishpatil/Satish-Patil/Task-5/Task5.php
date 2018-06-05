<?php 

require('../Calculator.php');
class Task5 extends Calculator {

    public function add($args = []) {
        $sum = 0;
        if(is_array($args)) {
            for($i= 0; $i < count($args); $i++) {
                if(0 < $args[$i]) {
                    $sum += $args[$i] ??  0;
                } else {
                    return "Negative numbers are not allowed";
                }
            }
        }
        return "sum is ".$sum. " ";
    }
}

$task5 = new Task5();
$arguments = isset($argv[2]) && !empty($argv[2]) ? explode(",", preg_replace('/\D/', ',', $argv[2])) : [];
echo $task5->add($arguments);


?>