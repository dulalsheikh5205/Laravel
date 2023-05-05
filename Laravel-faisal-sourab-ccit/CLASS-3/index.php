 <?php
// $a = 30;
// $b = 40;
// $c = 100;


// if($a > $b && $a > $c)
// {
//     echo "A is the greatest number";
// }
// elseif($b > $a && $b > $c)
// {
//     echo "B is the greatest number";
// }
// else
// {
//     echo "C is the greatest number";
// }

/*function greaternumberCal($aValue=0,$bValue=0,$cValue=0){
 $a = $aValue;
$b = $bValue;
$c = $cValue;


if($a > $b && $a > $c)
{
    echo "A is the greatest number";
}
elseif($b > $a && $b > $c)
{
    echo "B is the greatest number";
}
else
{
    echo "C is the greatest number";
}
}

greaternumberCal(50,20,30); */



// $alphabet = "dulal";
// // echo ctype_alpha($alphabet);

// if(ctype_alpha($alphabet) == true){
//     echo "This is alphabet";
// }else{
//     echo "This is not alphabet";
// }

$number = 50.67;

// var_dump(is_numeric($number)) ;

// if(is_numeric($number) == true){
//     echo "It is number";
// }else{
//     echo "It is not a number";

// }


// $num = 10;
// if($num > 0){
//     if($num%2 == 0){
//         echo "This is positive and Even number";
//     }else{
//         echo "This is positive and odd number";
//     }
// }elseif($num == 0){ 
//     echo "This is nutrul number";
// }else{
//     "This is negative number";
// }




// $userEmail = 'dulalsheikh@gmail.com';
// $userPassword = 123;

// if($userEmail == 'dulalsheikh@gmail.com' && $userPassword == 23){
//     echo "Login successfull";
// }else{
//     echo "credencials error";
// }


// $userEmail = 'dulalsheikh@gmail.com';
// $userPassword = 123;

// if($userEmail == 'dulalsheikh@mail.com'){
//     echo "Next step";
// }else{
//     echo "your email is incorrect";
// }


// $userEmail = 'dulalsheikh@gmail.com';
// $userPassword = 123;

// if($userEmail == 'dulalsheikh@gmail.com'){
//     if($userPassword==12){
//         echo "login";
//     }else
//     {
//       echo "your password is incorrect";  
//     }
// }else{
//     echo "your email is incorrect";
// }



/**
 * Question-about loan-system
 * loan = 100000 tk
 * duration = 12 month
 * interest = 10% in every year/per year
 * so how much money will  give to loan-othority per month for client?
 * 
 * question-anlysis
 * 100000/12 ==8334
 * 10% which is,  10/100 = 0.1
 * interest per month,which is, 0.1/12 =  0.008333
 * Answer  will be, per month money,which is-8334 and per month interest,which is, 0.008333 = 8334 + 0.008333
 */

/*
function perMonthToPay($amount = 0,$time = 1,$interestValue = 10){

$loan = $amount;
$duration = $time;
$interest = $interestValue / 100;

$perMonthPay =($loan / $duration) + ($loan * ($interest/12));
// echo "You have to pay ". ceil($perMonthPay)." tk per month <br> ";
return ceil($perMonthPay);
}

// perMonthToPay(50000,2,2);


function isAbleToPay($incomeValue,$expenseValue,$perMonthPayValue){
    $income = $incomeValue;
    $expense = $expenseValue;

    if($income - $expense > $perMonthPayValue ){
        echo "I can bear the loan ".$perMonthPayValue ;
    }else{
        echo "I can't bear the loan ".$perMonthPayValue ;
    }
}

isAbleToPay(50000,5000,perMonthToPay(10000000,2,2));

*/



// $a = 25;
// $b = 20;
// echo $a > $b ? 'A is greater Number' : 'B is greater Number';



// $num = 55;

// echo $num%2 == 0 ? "Even Number" : "Odd Number"; 

/*
-----switch case-------
$color = 'red';

switch($color){
    case 'red':
        echo $color." is not my favourite color <br> ";
        break;
    case 'green':
        echo $color." is my favourite color <br>";
        break;
    default:
    echo $color." is okay <br> ";
}
*/


// $user = ['Dulal',50,'PHP',true];
// $rishad = ['rishad alam',22,'BBA',true];
// var_dump($rishad);

$dulal = ["HTML","CSS","JS","PHP","LARAVEL"];
// var_dump($dulal);
var_dump($dulal[3]);
echo "<br>";
echo $dulal[3];



?>