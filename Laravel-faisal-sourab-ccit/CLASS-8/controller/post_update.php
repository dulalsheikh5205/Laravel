<?php 
if(isset($_POST['postButton'])){
    include '../inc/env.php';

    $title = $_POST['title'];
    $details = $_POST['details'];
    $id = $_POST['id'];
    $date= date('d/m/y');

    $query = "UPDATE post2 SET title='$title',details='$details', time='$date' WHERE id='$id'";
    $update = mysqli_query($db_conn,$query);
    header("location: ../allPost.php");
}


?> 