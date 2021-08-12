<?php
/*
Description
You will be given an array of numbers. You have to sort the odd numbers in ascending order while leaving the even numbers at their original positions.
result all tests are passed
*/
function sortArray(array $arr) : array {
  if (empty($arr)) {
    return $arr;
  }
  
  $resultArray = $arr;
  
  $arrOddNumbers = array_filter(
    $arr, 
    static function ($var) {
       return $var & 1;
    }
  );
    
  $indexesOfOddNumbers = array_keys($arrOddNumbers);
  sort($arrOddNumbers);
  
  $indexInsert = current($indexesOfOddNumbers);
  foreach ($arrOddNumbers as $number) {
    $resultArray[$indexInsert] = $number;
    $indexInsert = next($indexesOfOddNumbers);
  }
  
  return $resultArray;
}