<?php
$primeNumber = '';
if(isset($_POST['submit'])){
    // echo checkPrime($_POST['number']);

    for($i=2; $i < $_POST['number'];$i++){
        $result=checkPrime($i);
        if($result=="Prime"){
            $primeNumber.=$i.',';
        }
       
    }
    echo $primeNumber;
}
function checkPrime($n){
    $flag = 0;
    for($i = 2; $i < $n; $i++){
     if($n%$i == 0){
      $flag = 1;
      break;
     }
    }
    if($flag == 1){
      return "Not Prime";
    }else{
      return "Prime";
    }
}

  

?>
<form  method="POST">
    <input type="text" name="number" >
    <input type="submit" name="submit" value="submit">

</form>