<?php

class Human{
   private $eyes = 'duita';

   protected  function walk(){
        echo "I can walk";
    }
    public function emotion(){
        echo "I have emotion";
    }
}

class Robot extends Human{
 
    public function run(){
        echo "I can run";
    }
    public function iCanDo(){
        return $this->walk().$this->emotion().$this->run();
    }
}

$sofia = new Robot();
// $sofia->run();
$sofia->iCanDo();

$dulal = new Human();
$dulal->walk();
  
?>