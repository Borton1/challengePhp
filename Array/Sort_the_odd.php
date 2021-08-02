<?php
/*
Description
You will be given an array of numbers. You have to sort the odd numbers in ascending order while leaving the even numbers at their original positions.
result all tests are passed
*/
function sortArray(array $arr) : array {
  if(empty($arr)) return $arr;
  for($i = 0; $i < count($arr); $i++){
  	if(!($arr[$i] % 2 == 0)){
  		$arr_index[] = $i;
  		$arr_odd_numbers[] = $arr[$i];
  	}
  }
  if(!empty($arr_odd_numbers)){
      sort($arr_odd_numbers);
      for($i = 0; $i < count($arr_odd_numbers); $i++){
        $arr[$arr_index[$i]] = $arr_odd_numbers[$i];
      }
      return $arr;
  }
return $arr;
}