<?php
  
  $arr1 = array("jamal","dulal","ainal","helal");
  $arr2 = array("dulal","jamal","anika","sheikh");
  $arr3 = array("jamal","dulal","abir","sifat");

  $result = array_diff($arr1,$arr2,$arr3);

  echo "<pre>";
  print_r($result);
  echo "</pre>";
?>