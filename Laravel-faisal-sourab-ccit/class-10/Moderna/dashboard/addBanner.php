<?php
  include './include/header.php';  
?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Banner</h1>

      </div>

     <div class="card col-lg-5 mx-auto mt-2">
        <div class="card-header bg-dark text-light">
            <h4>Add Banner</h4>
        </div>
        <div class="card-body">
            <form action="../controller/storeBanner.php" method="post">
            <input type="text" placeholder="Banner Tittle" class="form-control my-3" name="bannerTitle">
            <textarea name="bannerDesc"  cols="30" rows="10" placeholder="Banner Description" class="form-control my-3"></textarea>
            <input type="text" placeholder="Banner Button Tittle" class="form-control my-3" name="btnText">
            <input type="text" placeholder="Banner Link" class="form-control my-3" name="link">
            <button type="submit" name="storeBanner" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
     </div>

      <textarea name="" class="textarea"></textarea>
    </main>

    <?php
      include './include/footer.php';  
    ?>
  