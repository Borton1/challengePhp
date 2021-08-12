<?php
/*
Description
https://www.codewars.com/kata/523f5d21c841566fde000009/train/php
Your goal in this kata is to implement a difference function, which subtracts one list from another and returns the result.

It should remove all values from list a, which are present in list b keeping their order.

arrayDiff([1,2],[1]) == [2]

If a value is present in b, all of its occurrences must be removed from the other:

arrayDiff([1,2,2,2,3],[2]) == [1,3]
resul all tests are passed
*/
function arrayDiff($a, $b) {
        if(empty($a)){
        return $a;
    }elseif (empty($b)) {
        return $a;
    }else{
         $result = array_diff($a, $b);
         return array_values($result);
    }
}