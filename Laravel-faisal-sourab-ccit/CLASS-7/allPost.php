
<?php
session_start();
include './inc/env.php'; 

$query = "SELECT * FROM post";
// var_dump($query);
$fetch  = mysqli_query($conn,$query);
// var_dump($fetch);
// $posts = mysqli_fetch_all($fetch,1);
$posts = mysqli_fetch_all($fetch,1);// 1 is use for row count
// echo "<pre>";
// var_dump($post);
// echo "</pre>";

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
<div class="card col-8 mx-auto mt-5">
    <div class="card-header d-flex justify-content-between">
        <h3>All Posts</h3>
        <a href="" class="btn btn-sm btn-danger">Back</a>
    </div>
    <div class="card-body">
        <table class="table">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Details</th>
                <th>Dtate</th>
                <th>Action</th>
            </tr>
            <?php 
            foreach($posts as $key=>$post){
            ?>
              <tr>
                <td><?php echo ++$key; ?></td>
                <td><?php echo $post['title'];  ?></td>
                <td>

                  <?php 
                  if(strlen($post['details']) > 50){
                    echo  substr($post['details'],0,50)."...";
                  }else{
                    echo $post['details'];
                  }
                    
                   ?>

                </td>
                <td><?php echo $post['time']; ?></td>
                <td>
                  <div class="btn-group">
                    <a href="./post.php?id=<?php echo $post['id']; ?>" class="btn btn-primary btn-sm">Show</a>
                    <a href="./editPost.php?id=<?php echo $post['id']; ?> " class="btn btn-warning btn-sm">Edit</a>
                    <a href="./controller/post_delete.php?id=<?= $post['id']?>" class="btn btn-danger btn-sm">Delete</a>
                  </div>
                </td>
              </tr>
            
            <?php
            }
            ?>
        
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>

<?php
session_unset();
?>