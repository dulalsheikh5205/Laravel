<!-- # session:
* first you have to start session[session_start();],
* And then you have to declare session($_SESSION['error_title'] = "title koi?";),
* And then you have to call the exact session to echo/display/print (echo $_SESSION['error_title'];) -->

<?php
session_start();
include '../inc/env.php';

if(isset($_POST['postButton'])){
//  print_r($_POST);
$title = $_POST['title'];
$details = $_POST['postDetails'];
$date = date('d/m/y');
echo $date;
// echo $title, $details;
if(empty($title)){
    $_SESSION['error_title'] = "title koi?"; 
    header("Location: ../index2.php");
}
if(empty($details)){
    // echo "details koi";
    $_SESSION['error_details'] = "details koi";
    header("Location: ../index2.php");
}else if(strlen($details) > 250){
    $_SESSION['error_details'] = "ar koto?";
    header("Location: ../index2.php");
}else{
    // echo $date;
   $query = "INSERT INTO post(title, details, time) VALUES ('$title','$details','$date')"; 
   $insert = mysqli_query($conn,$query);

    $_SESSION['successs'] = "your post has been uploaded successfully";

   header("Location: ../index2.php");

}
 
 
}else{
    echo "value nai";
}