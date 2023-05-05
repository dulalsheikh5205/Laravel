# super global $_GET['']; And $_POST[''];
*
```bash
index.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="" method="GET">
        <input type="text" name="user_name" id="">
        <button type="submit" name="submit">submit</button>
    </form> -->
    <?php 

// print_r($_GET);

// echo ($_GET['user_name']);
// var_dump($_GET['submit']);
// if(isset($_GET['submit'])){
//     echo "hlw there!";
// }

?>
    <form action="" method="POST">
        <input type="text" name="number" placeholder="Number" id="">
        <button type="submit" name="submit">Check Number</button>
    </form>
    <?php
    
    if(isset($_POST['submit'])){
    //   echo "hlw"; 
    // echo   $_POST['number']; 
    $number = $_POST['number'];
//    echo  $number%2==0 ? "Even Number": "Odd Number";
    echo $number%2==0 ? "${number} is an Even Number" : "${number} is an Odd Number";
    }
    ?>
  
</body>
</html>
```
# $_GET[''];
* 
```bash
index2.php
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Add Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">View All Post</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="card col-lg-6 mx-auto mt-5">
  <div class="card-header">
    <h4>Add Post</h4>
  </div>
  <div class="card-body">
    <form action="./controller/post_store.php" method="POST">
      <input type="text" name="" id="" class="form-control my-2" placeholder="Post Title">
      <textarea name="" id="" cols="30" rows="10" class="form-control my-2" placeholder="Post Details"></textarea>
      <button class="btn btn-primary w-100">Post</button>
    </form>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>

post_store.php
<?php

echo "hlw there";
```

```bash
index2.php

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Add Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">View All Post</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="card col-lg-6 mx-auto mt-5">
  <div class="card-header">
    <h4>Add Post</h4>
  </div>
  <div class="card-body">

    <form action="./controller/post_store.php" method="POST">

      <input type="text" name="title" id="" class="form-control my-2" placeholder="Post Title" >
    <span class="text-danger">
    <?php 
    if(isset($_SESSION['error_title'])){
      echo $_SESSION['error_title'];
    }
      
     ?>
    </span>

      <textarea name="postDetails" id="" cols="30" rows="10" class="form-control my-2" placeholder="Post Details"></textarea>
      <span class="text-danger">
      <?php
      if(isset($_SESSION['error_details'])){
        echo $_SESSION['error_details'];
      }
     
      
      ?>
      </span>
      <button class="btn btn-primary w-100" name="postButton">Post</button>

    </form>

  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>

<?php
session_unset();
?>
```

# session:
* first you have to start session[session_start();],
* And then you have to declare session($_SESSION['error_title'] = "title koi?";),
* And then you have to call the exact session to echo/display/print (echo $_SESSION['error_title'];) 

```bash
post_store.php

<?php
session_start();


if(isset($_POST['postButton'])){
//  print_r($_POST);
$title = $_POST['title'];
$details = $_POST['postDetails'];

// echo $title, $details;
if(empty($title)){
    $_SESSION['error_title'] = "title koi?"; 
    header("Location: ../index2.php");
}
if(empty($details)){
    // echo "details koi";
    $_SESSION['error_details'] = "details koi";
    header("Location: ../index2.php");
}else if(strlen($details) > 10){
    $_SESSION['error_details'] = "ar koto?";
    header("Location: ../index2.php");
}else{
   echo "done";
}


}else{
    echo "value nai";
}
```


