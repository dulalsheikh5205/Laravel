<?php
       $products  = array("banana","mango","pineapple","lemon","strawberry","berry");
       
      $chunk = array_chunk($products,4);

      echo "<pre>";
      print_r($chunk);
      echo "</pre>";
      
?>