<?php
session_start();

if(isset($_POST['register'])){
    //* VALIDATION START
    //* USERNAME

    // print_r($_POST);

    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $profileImage = $_FILES['profileImage'];
    $encPassword = sha1($password);



    if(empty($userName)){
        $_SESSION['error_name'] = "Please Enter Your Name";
        header("location: ./../register.php");

    }
    //*EMAIL VALIDATION
    else if(empty($email)){
        $_SESSION['error_email'] = "please Enter Your Email Address";
        header("location: ../register.php");
    }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $_SESSION['error_email'] = "please Enter A Valid  Email Address";
        header("location: ../register.php");
    }
    //*PHONE VALIDATION

      else if(empty($phone)){
        $_SESSION['error_phone'] = "please Enter Your Phone Number";
        header("location: ../register.php");
    }elseif(strlen($phone) > 11 || strlen($phone) < 11){
        $_SESSION['error_phone'] = "please Enter a Valid Phone Number";
        header("location: ../register.php");
    }
    //*PASSWORD VALIDATION
    else if(empty($password)){
        $_SESSION['error_password'] = "please Enter Your Password";
        header("location: ../register.php");
    }elseif(strlen($password) < 8){
        $_SESSION['error_password'] = "your password have to be more than 8 character";
        header("location: ../register.php");
    }
    //*CONFIRM PASSWORD
    elseif($password !== $confirmPassword){
        $_SESSION['error_confirmPassword'] = "your confirmPassword didn't match";
        header("location: ../register.php");
    }
    //*PROFILE IMAGE VALIDATION
    elseif(!$profileImage['name']){
        $_SESSION['error_img'] = "Please Enter Your Profile Image";
        header("location: ../register.php");
    }elseif($profileImage['name']){
        $profileImageName = $profileImage['name'];
        $imageNameArray = explode('.',$profileImageName);
        $extension = end($imageNameArray);
        // print_r($extension);
        if($extension != 'png' && $extension != 'jpg' && $extension != 'jpeg' && $extension != 'webp'){
            $_SESSION['error_img'] = "Please Enter choose a different file";
        header("location: ../register.php");
        }else{
            include '../inc/env.php';

           $newImageName = uniqid("user_").".".$extension;
           move_uploaded_file($profileImage['tmp_name'],'../uploads/'.$newImageName);

           //* DATA STORE DB
           $query = "INSERT INTO users (name, email, phone, password, profile_img) VALUES ('$userName','$email','$phone','$encPassword','$newImageName')";

           $insert = mysqli_query($db_conn,$query);

           if($insert){
            $_SESSION['success'] = "User created/registred successfully";
            header("location: ../login");
           }

        }
    }
}

?>