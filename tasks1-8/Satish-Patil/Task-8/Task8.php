<?php 

require('../Calculator.php');
class Task8 extends Calculator {
    public function add($argv = []) {
        return true;
    }
    
}

$task8 = new Task8();
$arguments = isset($argv[2]) && !empty($argv[2]) ? explode(",", preg_replace('/\D/', ',', $argv[2])) : [];
echo $task8->multiply($arguments);

?>