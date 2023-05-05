<?php
  session_start();
  if (isset($_SESSION['isLogin'])){
    header("location: dashboard/index");
  }      
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
        <?php
          if(isset($_SESSION['success'])){
            
        ?>
        <div class="alert alert-success">
            <?= $_SESSION['success']; ?>
        </div>
        <?php
          }      
        ?>
    <div class="card-header">Log In</div>
    <div class="card-body">
        <form action="./controller/loginUser.php" method="POST">
            <input type="text" class="form-control" placeholder="Email" name="email">
            <?php
          if(isset($_SESSION['error_email'])){
            
        ?>
        <div class="text-danger">
            <?= $_SESSION['error_email']; ?>
        </div>
        <?php
          }      
        ?>
            <input type="text" class="form-control my-3" placeholder="Password" name="password" >
            <?php
          if(isset($_SESSION['error_password'])){
            
        ?>
        <div class="text-danger">
            <?= $_SESSION['error_password']; ?>
        </div>
        <?php
          }      
        ?>
            <button type="submit" class="btn btn-primary w-100" name="loginBtn">submit</button>
            <a href="./register.php" class="btn btn-sm btn-success w-100 mt-2">Register Now!</a>
        </form>
    </div>
    </div>
    



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
<?php
  unset($_SESSION['success']); 
  unset($_SESSION['error_email']); 
  unset($_SESSION['error_password']); 
?>