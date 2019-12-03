<?php

$input = "00000111111111100111";

$check_zero_incr = 0;
$check_one_incr = 0;

if(!empty($input)) {
	$arr = str_split($input);
	foreach ($arr as $key => $value) {

		if($check_one_incr == 6 || $check_zero_incr == 6) {
			break;	
		}

		if($value == "0") {
			$check_zero_incr++;	
		}else{
			$check_zero_incr = 0;
		}

		if($value == "1") {
			$check_one_incr++;
		}else {
			$check_one_incr = 0;
		}
	}
}

if($check_one_incr == 6 || $check_zero_incr == 6) {
	echo "Sorry, sorry!";
}else{
	echo "Good luck!";	
}

?>