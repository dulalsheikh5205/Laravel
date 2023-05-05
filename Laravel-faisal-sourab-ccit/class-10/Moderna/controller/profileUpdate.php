<?php
  session_start();
  

  if(isset($_POST['updateProfile'])){
    $id = $_SESSION['auth']['id'];
    $profile_img = $_FILES['profile_img'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    // print_r($profile_img);
    // exit;
    $profileImageName = $profile_img['name'];
    

    if(empty($profileImageName)){
     //* Database update
     include_once '../inc/env.php';
     $query = "UPDATE users SET name='$name',email='$email' WHERE id = '$id'";
     $update = mysqli_query($db_conn,$query);

     if($update){
     
       $_SESSION['auth']['name'] = $name;
       $_SESSION['auth']['email'] = $email;
       header("location: ../dashboard/profile.php");
    }else{
      //* Image Formatting
      $array = explode('.',$profileImageName);
      $extension = end($array);
      $newImageName = uniqid('user_').'.'.$extension;
      move_uploaded_file($profile_img['tmp_name'],'../uploads/'.$newImageName);
      // print_r($newImageName);
      /** OLD IMAGES DELETED */
      $imagePath = '../uploads/'.$_SESSION['auth']['profile_img'];
      if(file_exists($imagePath)){
        unlink($imagePath);
      }
      //* Database update
      include_once '../inc/env.php';
      $query = "UPDATE users SET name='$name',email='$email', profile_img ='$newImageName' WHERE id = '$id'";
      $update = mysqli_query($db_conn,$query);

      if($update){
        $_SESSION['auth']['profile_img'] = $newImageName;
        $_SESSION['auth']['name'] = $name;
        $_SESSION['auth']['email'] = $email;
        header("location: ../dashboard/profile.php");
      }

    }
   
   
    }
  }    
?>