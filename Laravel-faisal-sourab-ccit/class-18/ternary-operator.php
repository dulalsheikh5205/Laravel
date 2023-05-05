<?php
/* Suppose you want to show various messages if users are eligible and have enough credit. The following example chains two ternary operators: */

$eligible = true;
$has_credit = false;

$message = $eligible
			? ($has_credit
					? 'Can use the credit'
					: 'Not enough credit')
			: 'Not eligible to buy';

echo $message;

# In php, ternary operator for three conditions in php code example

$foo = 5;
$bar = ($foo == 1) ? "1" : (($foo == 2)  ? "2" : "other");
echo $bar;

# In php, Multiple Ternary operator in php code example

if($something == true){
    echo "foo";
}
else{
    if($somethingElse == true){
        echo "bar";
    }else{
        if($bla == true){
            echo "pool";
        }
        else{
            if($xxxxx == true){
                echo 'coffe';
            }else{
                echo "";
            }
        }
    }
}

($something) ? 'foo' : (($somethingElse) ? 'bar' : (($bla) ? 'pool' : (($xxxxx) ? 'coffe' : '')));
?>
