<?php  
include '../inc/env.php';

$id = $_GET['id'];
$query = "DELETE  FROM post2 WHERE id='$id'";
$delete = mysqli_query($db_conn,$query);
header("location: ../allPost.php");

?>