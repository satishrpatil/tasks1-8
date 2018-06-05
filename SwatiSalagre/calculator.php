<?php
class Calculation { 
     
    public $result; 
        
    function getResult($operatorName, $parameterList) 
    { 

        switch($operatorName)
        {
        	case 'sum' :	$explodedArr =  explode(",",$parameterList);    /* converted comma seperated values string into array */
                            $result = array_sum($explodedArr); /* calculated sum of array elements */ 
                            break;

            case 'add' :    $explodedArr =  explode(",",$parameterList);    /* converted comma seperated values string into array */
                            $result = array_sum($explodedArr); /* calculated sum of array elements */ 
                            break;

            case 'addWithNewLine' :    $explodedArr = preg_split("/\n|,/", $parameterList); /* converted comma seperated values string into array */
                            $result = array_sum($explodedArr); /* calculated sum of array elements */ 
                            break;

            case 'addWithDelimiter' :    $explodedArr = preg_split("/[\\\|;]+/", $parameterList); /* converted comma seperated values string into array */
                            $result = array_sum($explodedArr); /* calculated sum of array elements */ 
                            break;

            case 'addNoNegative' :    $explodedArr = preg_split("/[\\\,]+/", $parameterList); /* converted comma seperated values string into array */
                            if(min(array_filter($explodedArr)) < 0) /* removed empty value and get mininmum value  */
                            {
                                $result = 'Negative numbers not allowed';
                            }
                            else
                            {
                                $result = array_sum($explodedArr); /* calculated sum of array elements */ 
                            }
                            break;

            case 'addShowNegative' :    $explodedArr = preg_split("/[\\\,]+/", $parameterList); /* converted comma seperated values string into array */
                            if(min(array_filter($explodedArr)) < 0) /* removed empty value and get mininmum value  */
                            {
                                $negativeNums = array_filter($explodedArr, function ($v) {
                                    return $v < 0;
                                });

                                $result = 'Negative numbers '.json_encode(array_values($negativeNums)).' not allowed';
                            }
                            else
                            {
                                $result = array_sum($explodedArr); /* calculated sum of array elements */ 
                            }
                            break;

            case 'addBelowThousand' :  
                            $explodedArr =  explode(",",$parameterList);    /* converted comma seperated values string into array */  

                            $lower_limit = 1;
                            $upper_limit = 1000;

                            $arrBelowThousand = array_filter($explodedArr,
                                function ($value) use ($lower_limit, $upper_limit) {
                                    return ($value >= $lower_limit && $value <= $upper_limit);
                                }
                            );

                            $result = array_sum($arrBelowThousand); /* calculated sum of array elements */ 
                            break;

            case 'multiply' :    
                            $explodedArr =  explode(",",$parameterList);    /* converted comma seperated values string into array */
                            $result = array_product($explodedArr); /* calculated sum of array elements */ 
                            break;
                 

        	default : $result = '';
        }

        return $result;
    } 
} 

$calc = new Calculation; 

if(isset($argv[2]))
{
	print $calc->getResult($argv[1],$argv[2]);
}
else
{
	print $calc->getResult($argv[1],'');
}	

echo "\n";

?>