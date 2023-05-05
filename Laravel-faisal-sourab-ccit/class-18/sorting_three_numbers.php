
 <?php
/*
// PHP program to sort an array of size 3
function sort3(&$arr, $temp)
{
	// Insert arr[1]
	if ($arr[1] < $arr[0])
	{
		$temp[0] = $arr[0];
		$arr[0] = $arr[1];
		$arr[1] = $temp[0];
	}

	// Insert arr[2]
	if ($arr[2] < $arr[1])
	{
		$temp[0] = $arr[1];
		$arr[1] = $arr[2];
		$arr[2] = $temp[0];
	}
	
	if ($arr[1] < $arr[0])
	{
		$temp[0] = $arr[0];
		$arr[0] = $arr[1];
		$arr[1] = $temp[0];
	}
}

// Driver Code
$a = array(10, 12, 5);
$temp1 = array(10);
sort3($a, $temp1);

for ($i = 0; $i < 3; $i++)
    echo($a[$i] . " ");
 
// This code is contributed
// by Code_Mech.
*/
?> 



<?php
// sorting three number in php?
$number1 = 5;
$number2 = 3;
$number3 = 9;

$numbers = array($number1,$number2,$number3);

sort($numbers);

echo "<pre>";
print_r($numbers);
echo "</pre>";



?>

