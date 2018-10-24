<?php
$arr = [1,8,2,6,10,5,4,9,8,7];


var_dump(QuickSort($arr));

function QuickSort($arr)
{
	if(count($arr) <= 1){
		return $arr;
	}
	$key = $arr[0];
	$left = $right = [];
	for ($i=1; $i < count($arr); $i++) { 
		if ($arr[$i] < $key) {
			$left[] = $arr[$i];
		}else{
			$right[] = $arr[$i];
		}
	}
	$left = QuickSort($left);
	$right = QuickSort($right);
	array_push($left, $key);
	return array_merge($left,$right);
}