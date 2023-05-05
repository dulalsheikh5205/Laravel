<?php
  class Human{

       //*property
       public $eyeColor;
      protected $name;
  
    //*construct function
    function __construct($username){
        $this->name = $username;
    }

   
  //*methods  
    function getName($age,$hobby){
        echo "my name is {$this->name} and my age is{$age}{$hobby}";
    }
  }  
  class Robot extends Human{

    function getName($age,$hobby){
      echo "hello I am {$this->name} and I am {$age} {$hobby} ";
    }
   
   function greeting(){
      echo "hello, there I am {$this->name}";
    }
  }
  
  // $dulal = new Human('hus');
  // $dulal->getName();
  // echo $dulal->name;

  $sofia = new Robot("soffia");
  $sofia->getName(25,'coding');
 
  // $sofia->greeting();

  
?>