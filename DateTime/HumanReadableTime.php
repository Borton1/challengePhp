https://www.codewars.com/kata/52685f7382004e774f0001f7/train/php
function human_readable($number) {
    if($number < 0) 
    {
        return 0;
    }elseif ($number == 0) {
        return '00:00:00';
    }elseif($number > 0 && $number <= 359999){
        $minutes  = intval($number/ 60);
        $hours   = intval($minutes/ 60);
        if($hours == 0)
        {
            $hours = "00";
        }elseif($hours < 10 && $hours > 0){
            $hours = "0".$hours;
        }
        $seconds = $number - $minutes * 60;
        $str_time = date("i:s", mktime(0,$minutes,$seconds));
        $arr_time = explode(":" , $str_time);
        array_unshift($arr_time , $hours);
        $arr_time = implode(":",$arr_time);
        return $arr_time;
    }else{
        return 0;
    }
}