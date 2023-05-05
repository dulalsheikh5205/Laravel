<?php
  session_start();      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="card col-5 mx-auto mt-5">
    <div class="card-header">Register A User</div>
    <div class="card-body">
        <form action="./controller/storeUser.php" method="POST" enctype="multipart/form-data" >
            <input type="text" name="userName" class="form-control my-3" placeholder="User Name">
            <span class="text-danger">
            <?php
              if(isset($_SESSION['error_name'])){
                echo $_SESSION['error_name'];
              }      
            ?>
            </span>
            <input type="text" name="email" class="form-control my-3" placeholder="Email">
            <span class="text-danger">
            <?php
              if(isset($_SESSION['error_email'])){
                echo $_SESSION['error_email'];
              }      
            ?>
            </span>
            <input type="text" name="phone" class="form-control my-3" placeholder="Phone">
            <span class="text-danger">
            <?php
              if(isset($_SESSION['error_phone'])){
                echo $_SESSION['error_phone'];
              }      
            ?>
            </span>
            <input type="text" name="password" class="form-control my-3" placeholder="Password" >
            <span class="text-danger">
            <?php
              if(isset($_SESSION['error_password'])){
                echo $_SESSION['error_password'];
              }      
            ?>
            </span>
            <input type="text" name="confirmPassword" class="form-control my-3" placeholder="Confirm Password" >
            <span class="text-danger">
            <?php
              if(isset($_SESSION['error_confirmPassword'])){
                echo $_SESSION['error_confirmPassword'];
              }      
            ?>
            </span>
            <input type="file" name="profileImage" class="form-control my-3">
            <span class="text-danger">
            <?php
              if(isset($_SESSION['error_img'])){
                echo $_SESSION['error_img'];
              }      
            ?>
            </span>
            <button type="submit" name="register" class="btn btn-primary w-100">Register</button>
            <a href="./login.php" class="btn btn-sm btn-success w-100 mt-2">Return To Login</a>
        </form>
    </div>
    </div>
    



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>


<?php
  session_unset();      
?>