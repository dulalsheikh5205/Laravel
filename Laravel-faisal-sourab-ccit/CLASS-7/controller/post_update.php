<?php
if(isset($_POST['postButton'])){
    //* include DB files
    include '../inc/env.php';

    $title=$_POST['title'];
    $details= $_POST['postDetails'];
    $id=$_POST['id'];

    $date=date('d/m/Y');

    // print_r($_POST);
    $query = " UPDATE post SET title= '$title',details='$details',time='$date' WHERE id='$id'";
   $update = mysqli_query($conn,$query); 
   header("Location: ../allPost.php");
}