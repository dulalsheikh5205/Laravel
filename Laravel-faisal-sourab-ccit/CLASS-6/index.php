<?php

// for($i = 1; $i<11; $i++){}

// $num = 10;
// echo $num++;
// echo "<br>";
// echo $num;

// pre-increment
//  that's means one step before (or exactly that coding same echo line) that's variable will be added/minus one(1) with own variable or container
// $num = 10;
// echo --$num;

// for($i =1; $i<11; $i++){
//     echo "Hlw world<br>";
// }


// for($i=1; $i<=10;$i++){
//     echo "2 * $i = " . 2*$i."<br>" ;
// }

// for($i=1; $i<=10; $i++){
//     $num = 2;
//     echo "{$num} * ${i} =". 2*$i."<br>";
// }

// for($i=1905; $i <=2022; $i++){
//     echo $i."<br>";
// }
// infinite loop-> loop will does not false, thats means server will crush becase all time loop will continue due to do not get false condition, normally when loop will get false condition then loop will finish.

// for($i=1905; $i <= 2022; $i--){
//   echo  $i."<br>";
// }

// # while loop ->
// // * ($i=1;)initialization will remain before in while block and condition will remain in the while($i<11;) block And execute code will remain in the {echo $i} block and at the end of the{}block code  increment/decrement ($i++ )will remain.
// // * Example below->

// $i = 1;
// while($i < 11){
//     echo $i."<br>";

//     $i++;
// }


# do while loop ->
// * At the first begining initialization will remain before the do block And then do block will start, echo/print and increment/decrement will remain in this do blcok, do{echo $i; $i++;} And after then condition will remain in the while block, while($i<11);
// $i = 1;
// do{
//     echo $i."<br>";
//     $i++;
// }
// while($i < 11);


# foreach loop -> 
// * using in array[], foreach loop have two condition in foreach block, At the 1st pass the array variable And after then want to break all array come out as single dataValue from array variable, thats why 2nd pass will through a name to give as a dataValue variable name

// $colors = ['red','coral','light-blue'];
// foreach($colors as $values){
//         echo $values."<br>";
// }

// $colors = ['red','green','blue'];
// echo "my fovourite color is ".$colors[0]."<br>";
// echo "my fovourite color is ".$colors[1]."<br>";
// echo "my fovourite color is ".$colors[2]."<br>";

// $colors = ['red','green','blue'];
// foreach($colors as $singleColor){
//     echo "hellow world <br>";
// }

// $colors = ['red','green','blue'];
// foreach($colors as $singleColor){
//     echo "my favourite color is ".$singleColor."<br>";
// }






?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="" id="">
        <?php 
        // for($i=1905; $i <= 2022; $i++){
        // // echo "<option value=''>$i</option>";
        //     echo '<option value="">'.$i.'</option>';
            
        // }

        // for($i=2022; $i >= 1905; $i--){
        //     echo '<option value="">'.$i.'</option>';
        // }
        
        ?>
        
    </select>
</body>
</html>

 -->

 <!-- <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    
    <ul>
        <?php
        
        // $todoList =[
        //     'buy new t-shirt',
        //     'do homework',
        //     'buy gift for girlfriend'
        // ];
        // foreach ($todoList as $singularList){
        //      echo "<li>$singularList</li>";
        // }
        ?>
    </ul> -->
    <!-- <ul>
     <?php
       
        // $todoList =[
        //     'buy new t-shirt',
        //     'do homework',
        //     'buy gift for girlfriend'
        // ];
        // foreach ($todoList  as $index=> $singularList){
        //     //  echo "<li>".++$index. $singularList."</li>";
        //     echo "<li>++$index $singular";
        // }
        ?> 
    </ul>
 </body>
 </html> -->
 <!-- */
// # php superglobal variable 
// * All variable are casesensitive, php variable have 2 scope , local scope and global scope
// * when a variable we declare in a function, after then that variable we can access only through that specific function, this called local scope. 
// * when a variable we declare outside a function block, after then that variable we can access only through ouside of function, this called global scope.
if, we want to use this global variable into function block, then we must give global[keyword] before that variable in function block, or use super global varibale $GLOBALS[]=; ,  -->
  <?php
//  $num = 50;

//  function check(){
//     $oddNumber = 540;
//     global $oddNumber;
//     //$GLOBALS['oddNumber']=50;
//  } 
//  check();
//  echo $oddNumber;
 
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  

 </head>
 <body>
    <div class="card col-6 mx-auto mt-5">
        <div class="card-body">
            <form action="" method="GET">
                <input type="text" class="form-control mb-2" placeholder="User Name" name="user_name">
                <button class="btn btn-primary" name="submit">submit</button>
            </form>
        </div>
    </div>
    <?php 
    // var_dump($_GET);
    // print_r($_GET['user_name']);
    // echo "welcome to our website ".$_GET['user_name'];
    // print_r($_GET['submit']);
    // var_dump($_GET['submit']);
if(isset($_GET['submit'])){
    echo "welcome to our website ".$_GET['user_name']; 
}
// $submit = $_GET['submit'];
// if(isset($_GET[$submit])){
//     echo "welcome to our website".$_GET['user_name']; 
// }

    ?>
 </body>
 </html>
