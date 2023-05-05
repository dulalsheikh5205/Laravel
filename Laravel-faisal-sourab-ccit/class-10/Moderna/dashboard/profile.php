<?php
  include './include/header.php'; 
  
  
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User Profile</h1>

      </div>

     

    Customize your profile here...

         <!-- password change -->
    <div class="card col-8 mt-5 mx-auto">
      <div class="card-header">
            <h3>User Password</h3>
      </div>
      <div class="card-body">
            <form action="../controller/updatePassword.php" method="POST">
              <input type="text" name="oldPassword"  class="form-control my-2" placeholder="Current Password">
              <?php
                if(isset($_SESSION['error_password'])){
              ?>

              <span class="text-danger"><?= $_SESSION['error_password'];?></span>

              <?php
                }
              ?>
              <input type="text" name="newPassword" class="form-control my-2" placeholder="New Password">
              <input type="text" name="confirmPassword" class="form-control my-2 <?php 
              if(isset($_SESSION['error_password'])){
                
                echo "is-invalid";
              }
              ?> " placeholder="Confirm Password">
              <button type="submit" name="updatePassword" class="btn btn-primary">Update Password</button>
            </form>
      </div>
    </div>


    <div class="card col-lg-8 mx-auto mt-5">
        <div class="card-header">
            <h3>User Profie</h3>
        </div>
        <div class="card-body">
            <form action="./../controller/profileUpdate.php" method="post" enctype="multipart/form-data">
                <label for="profile">
                    <img src="<?= baseUrl() . 'uploads/' . $_SESSION['auth']['profile_img'] ?>" alt=""
                    style="width:150px; height:150px; border-radius:50%; object-fit:cover; object-position:center;cursor:pointer;">

            
                </label>
                <input type="file" name="profile_img" class="form-control" id="profile">
                <label for="name" class="my-3 w-100">
                    User Name
                    <input type="text" name="name" id="name" class="form-control" value="<?= $_SESSION['auth']['name'];?>">
                </label>
                <label for="email" class="my-3 w-100">
                    User Email
                    <input type="text" name="email" id="email" class="form-control" value="<?= $_SESSION['auth']['email'];?>">
                </label>

                <button type="submit" class="btn btn-primary" name="updateProfile">Update Profile</button>
            </form>
        </div>
    </div>

 

  
    </main>

    <?php
      include './include/footer.php';  
      unset($_SESSION['error_password']);
    ?>
  