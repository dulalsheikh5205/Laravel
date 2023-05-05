<?php
 abstract class Car{
   abstract function forwords();
   abstract function backwords();
  } 
  
  class Tesla extends Car{
        function forwords(){
            echo "forwords";
        }
        function backwords(){
            echo "backwords";
        }
  }

 abstract class Human{
    abstract  function talk();
  }
  class Robot extends Human{
    function talk(){
        echo "can talk";
    }
  }
?>