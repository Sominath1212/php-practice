<?php
$number = readline("Ennter number=\t");

$num = 0;
$num1 = 1;
$f=0;
for ($i = 1; $i <= $number; $i++) {
    echo $f . "\t";
    $f = $num + $num1;
    $num = $num1;
    $num1 = $f;
  
}
?>