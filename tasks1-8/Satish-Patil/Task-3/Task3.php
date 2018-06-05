<?php 

require('../Calculator.php');
class Task3 extends Calculator {

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

$task3 = new Task3();
$arguments = isset($argv[2]) && !empty($argv[2]) ? explode(",", preg_replace('/\D/', ',', $argv[2])) : [];
echo $task3->add($arguments);
?>