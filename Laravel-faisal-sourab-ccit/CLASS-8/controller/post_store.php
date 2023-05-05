<?php
session_start();
include '../inc/env.php';

if(isset($_POST['postButton'])){
//    print_r($_POST);
   $title = $_POST['title'];
   $details = $_POST['details'];
   $date = date('d/m/y');

  if(empty($title)){
    $_SESSION['error_title']="title koi";
    header("location: ../index.php");
  }
  if(empty($details)){
   $_SESSION['error_details']="details koi";
   header("location: ../index.php");
  }else if(strlen($details) > 100){
    $_SESSION['error_details']="ar koto?";
    header("location: ../index.php");
  }else{
   
    $query = "INSERT INTO post2(title, details, time) VALUES ('$title','$details','$date')";
    $insert = mysqli_query($db_conn,$query);
    $_SESSION['success']="your post has been uploaded successfully";

    header("location: ../index.php");

  }


}else{
    echo "value nai";
}

?>