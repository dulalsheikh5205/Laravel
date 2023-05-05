
<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="number" placeholder="number" id="">
        <button type="submit" name="submit" >check number</button>
    </form>
    <?php
    // print_r($_GET);
    // print_r($_GET['number']);
    // echo $_GET['number'];
    // print_r($_GET);
    // var_dump($_GET['submit']);
    // if(isset($_GET['submit'])){
    //     echo "hlw there";
    // }
    // if(isset($_GET['submit'])){
    //     echo $_GET['number'];
    // }
        /*
    if(isset($_POST['submit'])){
      $num = $_POST['number'];
    //   echo $num%2==0?'Even Number':'Odd Number';
     echo $num%2==0 ? "${num} is an Even Number" : "${num} is an Odd Number";
    }

    */
    ?>
</body>
</html>
-->


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