<?php
function number($kazu){
    $result = $kazu * 2;
    return $result;
}
echo number(11);
echo "\n";


function f($a, $b){
    $result = $a + $b;
    return $result;
}
echo f(10,10);
echo "\n";



function kakezan($arr){
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
}
echo $result;
}
echo kakezan(array(1, 3, 5 ,7, 9));
echo "\n";

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
      if ($max_number < $a){
          $max_number = $a;
      }
    }
    return $max_number;
}
echo max_array(array(8,-10,15,3,25));
