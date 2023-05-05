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
?>