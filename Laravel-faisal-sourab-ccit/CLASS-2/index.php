<?php


// echo "hello world <br>";
// echo 50;
// $name = null;
// echo $name;

// $Name = "Dulal";
// echo " my name is strtoupper ${Name} <br>";
// printf("my name is %s", strtoupper($Name));

// $age = 28.544444333;
// echo "<br>";
// $age = true;
// var_dump($age);

// $name = "Duall";
// $age = 50;

// printf("my name is %s . My age is %d",ucwords($name), $age);


// $num1 = 10;
// $num1 -= 2;

// echo $num1;

// define ("PI",3.1416); by default remain false 
// echo PI;
// define("PI",3.1416,true);
// echo pi;
// define("Name","Dulal");
// // echo "My name is ".Name;
// printf("my name is %s", Name);




// function getResult($mathNum,$engNum,$ictNum,$banglaNum,$userName){
//     $math = $mathNum;
//     $eng = $engNum;
//     $ict = $ictNum;
//     $bangla = $banglaNum;
//     $name = $userName;
//     $result = $math + $eng + $ict + $bangla;
//     echo "$name results is $result marks";
// }

// getResult(50,50,50,50,"Dulal");



// function getResult($mathValue,$engValue,$ictValue,$banglaValue,$nameValue){
//     $math = $mathValue;
//     $eng = $engValue;
//     $ict = $ictValue;
//     $bangla = $banglaValue;
//     $name = $nameValue;
//     $result = $math + $eng + $bangla + $ict ; 
//     echo "$name  results is $result marks";
// }

// getResult(50,50,50,50,"Dulla");

// function slitBill($totalBill = 0,$friends = 1){
//     $totalCost = $totalBill;
//     $totalMember = $friends;
//     $result = $totalCost/$totalMember;
//     echo "Every one has to pay $result";
// }
// slitBill(1000,2);


// $num = 50;
// if($num <= 40){
//     echo "true";
// }else{
//     echo "false";
// }



// function checkNumber($numberValue = 0){
//     $number = $numberValue;

//     if($number==0){
//         echo"Please Enter a number";
//         exit();
//     }else{

//     }


//     if($number%2 == 0){
//         echo "This is even number";
//     }else{
//         echo "This is odd number";
//     }
// }

// checkNumber(100);


// function getResult($engValue,$banglaValue){
//     $eng = $engValue;
//     $bangla = $banglaValue;
//     $result = $eng + $bangla;

//     if($result >=150){
//         echo "you passed";
//     }else{
//         echo"you failed";

//     }
// }
// getResult(50,100);

// function getResult($engValue,$banglaValue){
//     $eng = $engValue;
//     $bangla = $banglaValue;
//     $result = $eng+$bangla;

//     if($result >= 150){
//         echo "Excellient";
//     }else if($result < 150 && $result >=140){
//         echo "Very Good";
//     }
//     else{
//         echo "ricksha kine dibo";
//     }
// }
// getResult(90,30);




// function login(){
//     $email = "dulalsheikh5205@gamil.com";
//     $password = "password";
//     if($email == 'dulalsheikh5205@gamil.com'  && $password == 'pssword'){
//         echo "you are logged in";
//     }else
//     {
//         echo "failed to login";
//     }
// }

// login();


// function numberChecker($numberValue = 0){
//     $number = $numberValue;
//     if($number > 0){
//         echo "$number is positive number";
//     }else if($number == 0){
//         echo "$number is a nutral number";
//     }
    
//     else{
//         echo "$number is negetive number";
//     }
// }
// numberChecker(-1);


function marryAgeChecker($ageValue = 0){
    $age = $ageValue;
   if($age == 0){
        echo "Enter your age";
    }else if($age >= 21){
        echo "can be marry";
    }else{
        echo "can not be marry";
 }
}
    
marryAgeChecker(21);



