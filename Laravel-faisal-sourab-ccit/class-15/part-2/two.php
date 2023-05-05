<?php
   class Human{
    public static $votingAge = 18;
    // public $votingAge = 18;
    public static $marriedAge = 21;

    const PI = 3.1416;

    function isvalidedVoter(){
        echo "voting age is" . self::$votingAge;
    }
    
   static function greeting(){
        echo "hI there!";
    }

    function getPiValue(){
        echo self::PI;
    }

   }   
   
   class Robot extends Human{
        function isValidVoter()
        {
            echo "Robot voting age is ".parent::$votingAge;
        }
   }

   $dulal = new Human();
//  echo  $dulal->votingAge;
// echo Human::$marriedAge;
        echo Human::PI;

//    $dulal = new Human();
//    $dulal->isvalidedVoter();

$dulal = new Robot();
// $dulal->isValidVoter();
// Human::greeting();
// Human::getPiValue();



?>