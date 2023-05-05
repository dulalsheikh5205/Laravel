<?php
    if(isset($_POST['updateBanner'])){
    include_once '../inc/env.php';
  
    
    $bannerTitle = $_POST['bannerTitle'];
    $bannerDesc = $_POST['bannerDesc'];
    $btnText = $_POST['btnText'];
    $link = $_POST['link'];
    $id = $_POST['id'];
    // echo $id;

    $query = "UPDATE banners SET banner_title='$bannerTitle',banner_detail='$bannerDesc',banner_link_title='$btnText',banner_link='$link ' WHERE id = '$id'";

    $update = mysqli_query($db_conn,$query);
    if($update){
        header("location: ../dashboard/allBanners.php");
    }else{
        echo "Error Occured";
    }

    }    
?>