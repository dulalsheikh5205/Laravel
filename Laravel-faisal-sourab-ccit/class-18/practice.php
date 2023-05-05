<?php
  class A{
    public static function welcome(){
      echo "Helld";
    }
  }  
  class B{
    public function message(){
      A::welcome();
    }
  }
  $objB = new B();
  $objB->message();
?>