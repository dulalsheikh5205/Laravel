<?php
  include './include/header.php';  
  include '../inc/env.php';
  $query ="SELECT * FROM banners ";
  $fetch = mysqli_query($db_conn,$query);
  $banners = mysqli_fetch_all($fetch,1);
//   var_dump($banners);

?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">All Banners</h1>

      </div>

    <table class="table table-responsive">
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Detail</td>
            <td>Button Text</td>
            <td>Button Link</td>
            <td>Actions</td>
        </tr>
        <?php
          foreach ($banners as $key => $banner) {
        ?>
            <tr>
            <td><?= ++$key;?></td>
            <td><?= $banner['banner_title'];?></td>
            <td><?= $banner['banner_detail'];?></td>
            <td><?= $banner['banner_link_title'];?></td>
            <td><?= $banner['banner_link']?></td>
            <td>
                <div class="btn-group">
                    <a href="./editBanner.php?id=<?= $banner['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="../controller/deleteBanner.php?id=<?= $banner['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                </div>
            </td>
        </tr>
        <?php 
          }      
        ?>
   
    </table>

   
    </main>

    <?php
      include './include/footer.php';  
    ?>
  