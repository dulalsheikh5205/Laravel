<?php
  $a = 30;
  $b = 50;
  $c = 30;
  
  if($a > $b && $a > $c){
    echo "largest number is 'A' ".$a;
  }
  else if($b > $a && $b > $c){
    echo "largest number is 'B' ".$b;
  }
  else if($c > $a && $c > $b){
    echo "largest number is 'C' ".$c;
  }
  else{
    echo "all numbers are equal";
  }
?>