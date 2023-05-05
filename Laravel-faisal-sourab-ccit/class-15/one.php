<?php
  class Car{



    // method
  function forwords(bool $carName){
        echo "The {$carName} is going forwords"."<br>";
    }

    function backwords($carName='BMW'){
        echo "The {$carName} is going backwords"."<br>";
    }

    function __construct(){
        echo "this is construct function";
    }
    function __destruct(){
        echo "this is destruct function";
    }
  }   
  
  $tesla = new Car;
  $tesla->forwords('tesla');
  $tesla->backwords('tesla');
//   var_dump($tesla);

  $lamborgini = new Car();
  $lamborgini->forwords('lamborgini');
  $lamborgini->backwords('lamborgini');
?>