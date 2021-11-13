<?php
function multiply($int){
    return ($a * 2);
}
echo $multiply(2);

echo "\n";

function sum($a,$b){
    return $a + $b;
    
}
echo sum(1,2);

echo "\n";

function multiplyAll($arr){
    $b=1;
    foreach($arr as $a){
        $b=$b * $a;
        
    }        
    return $b;
}
echo multiplyAll(array(1, 3, 5 ,7, 9));