<?php
 include_once '../inc/env.php';

  $id = $_GET['id'];  
  $query = "DELETE FROM banners WHERE id = '$id'";
  $delete = mysqli_query($db_conn,$query);
  if($delete){
    // echo "delete successfully";
    header("location: ../dashboard/allBanners.php");
  }else{
    echo "Error Occured";
  }  
?>