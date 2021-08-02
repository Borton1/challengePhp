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
        if(empty($arrayOfArrays)) return 0;
    for($i=0; $i < count($arrayOfArrays); $i++){
        if(empty($arrayOfArrays[$i])){
            return 0;
        }else{
            $arr_numbers[] = count($arrayOfArrays[$i]);
        } 
    }
    sort($arr_numbers);
    for($i=0; $i < count($arr_numbers); $i++){
        if($arr_numbers[$i]+1 != $arr_numbers[$i+1]){
            return $arr_numbers[$i]+1;
        }
    }
}