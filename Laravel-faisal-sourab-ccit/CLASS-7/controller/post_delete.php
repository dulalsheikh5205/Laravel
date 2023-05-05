<?php
include '../inc/env.php';
$id = $_GET['id'];
// echo $id;
$query = "DELETE FROM post WHERE id = '$id'";
$delete = mysqli_query($conn,$query);
header("Location: ../allPost.php");
?>