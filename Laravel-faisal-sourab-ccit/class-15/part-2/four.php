<?php
 interface Human{
       function talk();
  } 
interface  AI{
     function solveMath();
  }  
  class Robot implements Human,AI{

  }   
?>