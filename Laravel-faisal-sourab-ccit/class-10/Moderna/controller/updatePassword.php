<?php
session_start();


  if(isset($_POST['updatePassword'])){
        $id = $_SESSION['auth']['id'];
       $oldPassword =  $_POST['oldPassword'];
       $encOldPassword = sha1($oldPassword);
       $dbOldPassword = $_SESSION['auth']['password'];

       $userPassword = $_POST['newPassword'];
       $userConfirmPassword = $_POST['confirmPassword'];

       if($dbOldPassword == $encOldPassword){
            if($userPassword == $userConfirmPassword){
                include_once '../inc/env.php';
                $encPassword = sha1($userPassword);
                $query = "UPDATE users SET password='$encPassword' WHERE id = '$id' ";
                $update = mysqli_query($db_conn,$query);
                if($update){
                    header("location: ../dashboard/profile.php");
                }
            }else{
                $_SESSION['error_password'] = "Your confirm password did not match";
                header("location: ../dashboard/profile.php");
            }
       }else{
            $_SESSION['error_password'] = "Your current password did not match";
            header("location: ../dashboard/profile.php");
       }
  }      
?>