
<?php
session_start();
include './inc/env.php'; 

$id = $_GET['id'];
$query = "SELECT * FROM post WHERE id='$id'";
$select = mysqli_query($conn,$query);
$post = mysqli_fetch_assoc($select);

// var_dump($post['time']);

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
          <a class="nav-link" aria-current="page" href="./index2.php">Add Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./allPost.php">View All Post</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="card col-5 mx-auto mt-5">
    <div class="card-header">
       <?= $post['title'];?>
       <span><?= date('D d, M Y', strtotime($post['time'])); ?></span>
        <a href="./allPost.php" class="btn btn-danger btn-sm">Go Back</a>
    </div>
    <div class="card-body">
    <?= $post['details'];?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>

<?php
session_unset();
?>