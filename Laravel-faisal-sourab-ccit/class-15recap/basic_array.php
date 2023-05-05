<?php

$arr = array('dulal',52,'laravel','Dhaka','pabna','jamal');
// $arr[2];

// echo "<pre>";
// print_r ($arr);
// echo "</pre>";

// var_dump($arr);
/* echo "<ul>";
for($i=0; $i <= 4; $i++ ){
    echo "<li>";
    print_r ($arr[$i]);
    echo "</li>";
}

echo "</ul>"; */

/* echo in_array('52',$arr); */

/* if(in_array('jamal',$arr)){
    echo "Found";
}else{
    echo "not found";
} */

// echo array_search('jamal',$arr);
/* 
list($a,$b,$c,$d,$e)=$arr;
echo "employ are : $a, $b, $c, $d, $e"; */
/* 
$products = array("iPhone"=>"9.2","sumsung"=>"6.8","redmi"=>"8.8","nokia"=>"0.0");

// print_r($products);

foreach($products as $key=>$value){
    echo "<pre>";
    echo "$value RAting".$key."</br>";
    echo "</pre>";
  
} */

/* $fruits = array(
    "fruits"=>array(
            'a'=>'banana',
            'b'=>'bel',
            'c'=>'orange',
    ),
    "numbers"=>array(1,2,3,4,5),
    "holes"=>array(
            "first",
            5 =>"second",
            "third",
    ),

);

// echo $fruits["holes"][5];
 unset($fruits["holes"][0]);
echo $fruits["holes"][0]; */

$books = array(
    array(
        'name'=>'laravel',
        'edition'=>'1st',
        'price'=>1000
    ),
    array(
        'name'=>'php',
        'edition'=>'2nd',
        'price'=>800
    ),
    array(
        'name'=>'JS',
        'edition'=>'3rd',
        'price'=>600
    ),
    array(
        'name'=>'JQuery',
        'edition'=>'4th',
        'price'=>500
    ),
);

foreach($books as $vals){
    foreach($vals as $key => $finalValue){
        echo "$key : $finalValue </br>";
    }
    echo "</br>";
}
?>