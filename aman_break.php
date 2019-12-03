<?php

$input = "ahhelooeeeeolovvvlvoe";

$check_if_passed_l = false;
$check_if_passed_o = false;
$check_if_passed_v = false;
$check_if_passed_e = false;
$check_one_incr = 0;

if(!empty($input)) {
	$arr = str_split($input);
	$arr2 = $arr;
	foreach ($arr as $key => $value) {

		if(!in_array($value, array("l","o","v","e")) || ($value == "l" && $check_if_passed_l) || ($value == "o" && $check_if_passed_o) || ($value == "v" && $check_if_passed_v) || ($value == "e" && $check_if_passed_e)) {
			unset($arr2[$key]);
			continue;	
		}

		if(!$check_if_passed_l && in_array($value, array("o","v","e"))) {
			unset($arr2[$key]);	
			continue;
		}

		if(!$check_if_passed_o && in_array($value, array("v","e"))) {
			unset($arr2[$key]);	
			continue;
		}

		if(!$check_if_passed_v && in_array($value, array("e"))) {
			unset($arr2[$key]);	
			continue;
		}

		if($value == "l") {
			$check_if_passed_l = true;
		}elseif($value == "o") {
			$check_if_passed_o = true;
		}elseif($value == "v") {
			$check_if_passed_v = true;
		}elseif($value == "e") {
			$check_if_passed_e = true;
		}
	}
}

if(!empty($arr2)) {
	$output = implode("",$arr2);
	if (strpos($output, 'love') !== false) {
    	echo "I love you, too!";
    	return;
	}
}

echo "Let us breakup!";

?>