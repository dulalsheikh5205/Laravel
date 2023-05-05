<?php 
session_start();

if(isset($_POST['loginBtn'])){
    //* ENV FILE INCLUDE
    include '../inc/env.php';
    //* ENV FILE INCLUDE ENDS
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];
    $encPassword =  sha1($userPassword);
    // echo $userPassword;
   
    //* AUTH ATTEMPT
    $query = "SELECT email FROM users WHERE email='$userEmail'";
    $searchEmail = mysqli_query($db_conn,$query);
    // print_r($searchEmail);
    if($searchEmail->num_rows > 0){
        //* password check
        $query = "SELECT * FROM users WHERE password = '$encPassword' && email='$userEmail'";
        $user = mysqli_query($db_conn,$query);
       
        if($user->num_rows > 0){
            //* done;
           $auth = mysqli_fetch_assoc($user);
        //    print_r($auth);
        //    exit();
           $_SESSION['auth'] = $auth;
           $_SESSION['isLogin']= true;
        //    print_r($auth);
            header("location: ../dashboard/index");
        }else{
            $_SESSION['error_password'] = "Your password is Incorrect";
            header("location: ../login");
        }

    }else{
        $_SESSION['error_email'] = "Your Email is Incorrect";
        header("location: ../login");
    }
}
?>