<?php

function sum($a,$b){
  if ($a == $b){
    return ($a+$b)*3;
  }else{
    return $a+$b;
  }
}
print_r(sum(1, 2).'\n'.sum(3, 2).'\n'. sum(2, 2))
?>