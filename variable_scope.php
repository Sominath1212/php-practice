<?php

$Globle_variable = 200;

function addition($a, $b)
{

    $sum = $a + $b; //sum is a local varible of method addition
    
    return $sum;
}


echo addition(10, 30);
echo "globle variable" . $Globle_variable;
echo "globle variable" . $sum;
?>
