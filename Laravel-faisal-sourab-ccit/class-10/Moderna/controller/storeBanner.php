<?php

if(isset($_POST['storeBanner'])){
    include_once '../inc/env.php';

    $bannerTitle = $_POST['bannerTitle'];
    $bannerDesc = $_POST['bannerDesc'];
    $btnText = $_POST['btnText'];
    $link = $_POST['link'];

    $query = "INSERT INTO banners(banner_title, banner_detail, banner_link_title, banner_link) VALUE('$bannerTitle','$bannerDesc','$btnText','$link')";

    $response = mysqli_query($db_conn,$query);
    if($response){
        header("location: ../dashboard/addBanner");
    }else{
        echo "Error Occured";
    }

}
?>