<?php
  // require 'Human.php';
  // require 'test.php';
  
//   $dulal = new Human\Bangladeshi\Human;
//   $dulal->getName();

    // use Human\Bangladeshi\Human;
    // use Test\Human as TestHuman;
    // require './class/Human.php';


    function __autoload($className){
      require './class/'.$className.'.php';
    }

    $dulal = new Human();
    $dulal->getName();

    $car = new Car();
    $car->carName();

?>