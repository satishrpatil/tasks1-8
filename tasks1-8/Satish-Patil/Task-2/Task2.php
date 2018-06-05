<?php 

require('../Calculator.php');
class Task2 extends Calculator {

    public function add($args = []) {
        $sum = 0;
        if(is_array($args)) {
            for($i= 0; $i < count($args); $i++) {
                $sum += $args[$i] ??  0;
            }
        }
        return "sum is ".$sum. " ";
    }
}

$task2 = new Task2();
$arguments = isset($argv[2]) && !empty($argv[2]) ? explode(",", preg_replace('/\D/', ',', $argv[2])) : [];
echo $task2->add($arguments);

?>