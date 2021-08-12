/*Description
You get an array of arrays.
If you sort the arrays by their length, you will see, that their length-values are consecutive.
But one array is missing!


You have to write a method, that return the length of the missing array.
https://www.codewars.com/kata/57b6f5aadb5b3d0ae3000611/train/php
all tests are passed
*/
<?php
function getLengthOfMissingArray($arrayOfArrays) {
  if (empty($arrayOfArrays)) {
     return 0;
  }
  
  $arr_numbers = [];
  
  foreach ($arrayOfArrays as $item) {
     if (empty($item)) {
          return 0;
      }
      $arr_numbers[] = count($item);
  }

  sort($arr_numbers);
  foreach ($arr_numbers as $key => $item) {
    if ($key+1 !== $item) {
      return $key+1;
    }
  }
}