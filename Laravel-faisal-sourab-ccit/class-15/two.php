<?php
  class ClassRoom
  {
    function __construct($classLink,$classVideo='video'){
      $this->classLink = $classLink;
      $this->classVideo = $classVideo;
    }

   private $projector = 'tosiba';
   private $classLink = 'meet';
   private $classVideo = 'video link';

   function onGoingClass(){
      return "our projector is {$this->projector}";
   }

  public function  joinClass(){
   echo $this->classLink;
   echo $this->classVideo;
   }
   
  }    

  $class = new ClassRoom('meet');
  // echo $class->projector;
//  echo $class->projector = 'japan';
//  echo $class->onGoingClass();
echo "<br>";
$class->joinClass();


 $web = new ClassRoom('zoom','storage link');
 echo "<br>";
//  echo $web->projector;
 echo "<br>";
// echo $web->onGoingClass();
$web->joinClass();

?>