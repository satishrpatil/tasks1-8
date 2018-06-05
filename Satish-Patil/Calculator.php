<?php 

abstract Class Calculator{

    public abstract function add($args = []);
    public function multiply($args = []) {

        $multiply = 1;
        $negative_array = [];
        if(is_array($args)) {
            for($i = 0; $i < count($args); $i++) {
                if(0 < $args[$i]) {
                    if($args[$i] <= 1000) {
                        $multiply *= $args[$i] ??  0;
                    }
                } else {
                    $negative_array[] = $args[$i];
                }
            }
        }
        if(count($negative_array)) {
            return "Negative numbers [".implode(",", $negative_array)."] not allowed";
        }
        return "multiplication is ".$multiply. " ";   
    }
}

?>