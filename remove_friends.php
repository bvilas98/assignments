<?php

//Number of test cases..
//$T = 3;

//Total number friends
$N = 5;

// Number of frields she wants to delete
$K = 3;

$friends = "3 100 1 50 70";

$K_count = 0;
if(!empty($friends)) {
	$arr = explode(" ", $friends);
	$arr2 = $arr;
	foreach ($arr as $key => $value) {

		if(!empty($arr[$key+1]) && $value < $arr[$key+1]) {
			unset($arr2[$key]);
			$K_count++;
		}
		
		if($K_count == $K) {
			$deleteFriend = true;
			break;
		}
	}
}

if(!empty($arr2)) {
	$output = implode(" ",$arr2);
	echo $output;
}

?>