<?php 
// $heading ="
// <script>
// alert('hellow there')
// </script>
// ";
// echo htmlentities($heading);

// $heading = htmlentities("<a href='www.facebook.com'>Facebook</a>"); 
// echo html_entity_decode($heading);

// $name = "Dulal";
// echo str_repeat($name,3);

// $name = "Dulal  ";
// echo str_repeat($name,3);

// $name = '';
// if($name== ''){
//     echo "please input your name";
// }

// $name = '';
// if(empty($name)){
//     echo "pleasen input your Name";
// }
// $name = 'Dulal';
// if(empty($name)){
//     echo "pleasen input your Name";
// }else{
//     echo "Done";
// }

// $name = "Dulal";
// if(isset($name)){
//     echo $name;
// }else{
//     echo "Name is empty";
// }

// $name = null;
// if(isset($name)){
//     echo $name;
// }else{
//     echo "Name is empty";
// }

// $user = array(0,20,30);
// var_dump($user); 

// $string = " I am dulal";
// var_dump(explode(" ",$string));

// $gmail = "shourab.cit.bd@gmail.com";
// var_dump (explode(".",$gmail));


// $gmail = "shourab.cit.bd@gmail.com";
// $newArray = (explode(".",$gmail));
// // echo in_array("cit",$newArray);
// var_dump(in_array("cit",$newArray));

// $num =[10,20,30,40,100];
// echo end($num);

// $num =[10,20,30,40,100];
// echo count($num);


// $user = ['email'=>'user@gmail.com','password'=>123,'nickname'=>'Dulal'];
// $user2 = ['email'=>'user@gmail.com','password'=>5678,'nickname'=>'Dulal'];
// var_dump(array_diff($user,$user2));


// $question =[
//     "what is your name",
//     "what is your age",
//     "what is your phone number",
//     "what is your email",
//     "what is your credit  number"

// ];
// var_dump(array_rand($question,3));

// $question =[
//    "name"=> "what is your name",
//    "age"=> "what is your age",
//    "phone"=> "what is your phone number",
//    "email"=> "what is your email",
//    "credit"=> "what is your credit  number"

// ];
// var_dump(array_rand($question,3));



// $question =[
//     "name"=> "what is your name",
//     "age"=> "what is your age",
//     "phone"=> "what is your phone number",
//     "email"=> "what is your email",
//     "credit"=> "what is your credit  number"
 
//  ];
//  echo array_pop($question);
//  var_dump($question);



// $question =[
//     "name"=> "what is your name",
//     "age"=> "what is your age",
//     "phone"=> "what is your phone number",
//     "email"=> "what is your email",
//     "credit"=> "what is your credit  number"
 
//  ];
//  array_pop($question);
//  array_pop($question);
//  array_pop($question);
 
//  var_dump($question);


// $question =[
//     "name"=> "what is your name",
//     "age"=> "what is your age",
//     "phone"=> "what is your phone number",
//     "email"=> "what is your email",
//     "credit"=> "what is your credit  number"
 
//  ];
// array_push($question,["color"=>"blue"]); --try to slove this to give associative value
 
//  var_dump($question);




// $question =[
//     "name"=> "what is your name",
//     "age"=> "what is your age",
//     "phone"=> "what is your phone number",
//     "email"=> "what is your email",
//     "credit"=> "what is your credit  number"  
 
//  ];
//  array_shift($question);
//  var_dump($question); // remove first value of array;

// $question =[
//     "name"=> "what is your name",
//     "age"=> "what is your age",
//     "phone"=> "what is your phone number",
//     "email"=> "what is your email",
//     "credit"=> "what is your credit  number"
 
//  ];
//  array_unshift($question,["color"=>"blue"]); // add value of array to first
//  var_dump($question);


// $question =[
//     "name"=> "what is your name",
//     "age"=> "what is your age",
//     "phone"=> "what is your phone number",
//     "email"=> "what is your email",
//     "credit"=> "what is your credit  number"
 
//  ];

//  array_unshift($question,"color:blue");
// //  var_dump(array_reverse($question));
// echo array_search( "what is your email",$question);



// $exam = [
//     "2019" =>[
//         "math"=>45,
//         "ict"=>70,
//         "history"=>40,
//     ],
//     "2020" =>[
//         "math"=>80,
//         "ict"=>70,
//         "history"=>40,
//     ],
//     "2021" =>[
//         "math"=>78,
//         "ict"=>70,
//         "history"=>40,
//     ],
// ];
// var_dump(array_column($exam,"math"));
// echo $exam["2019"]["math"];


// $users = [
// "dulal"=>[
//     "phone"=>"03",
//     "username"=>"dulal",
// ],
// "jamal"=>[
//     "phone"=>"02",
//     "username"=>"jamal",
// ],

// "helal"=>[
//     "phone"=>"04",
//     "username"=>"helal",
// ],


// ];

// echo "<pre>";
// var_dump(array_column($users,"phone"));
// echo "</pre>";



// $num = [2,0,1,3,4,5,6,7,8,11,12,13,14,15,16];
// $evenArray = array_filter($num,function($data){
//     if($data % 2 == 0){
//         return $data;
//     }
// });
// // echo "<pre>";
// var_dump($evenArray); 
// // echo "</pre>"; 



// $num = [2,0,1,3,4,5,6,7,8,11,12,13,14,15,16,18,20,55,60,];
// $evenArray = array_filter($num,function($data){
//     if($data > 5 && 20 > $data){
//         return $data;
//     }
// });
// // echo "<pre>";
// var_dump($evenArray); 
// // echo "</pre>"; 



  $expenses =[
    '2019'=>[
        'edu'=>400,
        'living'=>500,
        'basic'=>150
    ],
    '2020'=>[
        'edu'=>99,
        'living'=>500,
        'basic'=>150
    ],
    '2021'=>[
        'edu'=>250,
        'living'=>500,
        'basic'=>150
    ],
    '2022'=>[
        'edu'=>550,
        'living'=>500,
        'basic'=>150
    ],
    '2023'=>[
        'edu'=>555,
        'living'=>500,
        'basic'=>150
    ],

  ];

  $eduExpenses = array_column($expenses,'edu');
// var_dump($eduExpenses); 

$biggerExpense = array_filter($eduExpenses,function($expense){
    return $expense > 150;
});

// var_dump($biggerExpense);
$totalExpense = array_sum($biggerExpense);
echo $totalExpense;