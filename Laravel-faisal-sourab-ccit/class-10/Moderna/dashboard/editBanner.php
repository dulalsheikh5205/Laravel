<?php
  include './include/header.php';  
  include '../inc/env.php';
  $id = $_GET['id'];
  $query = "SELECT * FROM banners WHERE id='$id'";
  $fetch = mysqli_query($db_conn,$query);
  $banner = mysqli_fetch_assoc($fetch);
//   var_dump($banner);
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Banner</h1>

      </div>

     <div class="card col-lg-5 mx-auto mt-2">
        <div class="card-header bg-dark text-light">
            <h4>Edit Banner</h4>
        </div>
        <div class="card-body">
            <form action="../controller/updateBanner.php" method="post">
            <input type="hidden" name="id" value="<?= $banner['id']; ?>">
            <input type="text" placeholder="Banner Tittle" class="form-control my-3" name="bannerTitle" value="<?= $banner['banner_title'];?>">
            <textarea name="bannerDesc"  cols="30" rows="10" placeholder="Banner Description" class="form-control my-3"><?= $banner['banner_detail'];?></textarea>
            <input type="text" placeholder="Banner Button Tittle" class="form-control my-3" name="btnText" value="<?= $banner['banner_link_title'];?>">
            <input type="text" placeholder="Banner Link" class="form-control my-3" name="link" value="<?= $banner['banner_link']?>">
            <button type="submit" name="updateBanner" class="btn btn-primary w-100">Update</button>
            </form>
        </div>
     </div>

   
    </main>

    <?php
      include './include/footer.php';  
    ?>
  