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
    
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Add Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./allPost.php">View All Post</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

<?php 
   if(isset($_SESSION['success'])){
 
   ?>

<div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    <?php 
    echo $_SESSION['success'];
    ?>
  </div>
</div>
<?php 
   
}
?>


<div class="card col-lg-6 mx-auto mt-5">
    <div class="card-header">
        <h4>Add post</h4>
    </div>
    <div class="card-body">
       <form action="./controller/post_store.php" method="post">
       <input type="text" class="form-control my-2" name="title" id="" placeholder="post title" >
       <span class="text-danger">
       <?php
       if(isset($_SESSION['error_title'])){
           
           echo $_SESSION['error_title'];
       }
       ?>
       </span>


        <textarea name="details" class="form-control my-2" id="" cols="30" rows="10" placeholder="post details"></textarea>

        <span class="text-danger">
        <?php 
       if(isset($_SESSION['error_details'])){

           echo $_SESSION['error_details'];
       }
        ?>
        </span>
        <button class="btn btn-primary w-100 " type="submit" name="postButton">Post</button>
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