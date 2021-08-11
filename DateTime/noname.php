<?php

$string = '01:09:02,684 --> 01:09:03,601 Run Forrest, run!';
$offset = 3663655;
function subs_offset_apply($string, $offset){
    if($offset < 0) return "Invalid offset";
    $date = explode(" " , $string);
    $time_one = explode("," , $date[0]);
    $time_second = explode("," , $date[0]);
    if($time_one[1] < 0 && $time_one[1] > 999) return 0;
    if($time_second[1] < 0 && $time_second[1] > 999) return 0;
    
    return $arr_time[1];
}
var_dump(subs_offset_apply($string , $offset));
string = "01:09:02,684 --> 01:09:03,601 Run Forrest, run!"  
subs_offset_apply(string, 3663655)
output: "02:10:06,339 --> 02:10:07,256 Run Forrest, run!"

function count_smileys($arr): int {
$pattern = '/[:;][\-\~]*[)D]/gm';
$string = implode(" ", $arr);
preg_match($pattern , $string , $matches);
return count($matches);
}