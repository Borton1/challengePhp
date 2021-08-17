<?php
$string = "01:09:02,684 --> 01:09:03,601 Run Forrest, run!"; 
preg_match_all('/00*\d:00*\d:00*\d,\d{3}/', $string, $matches);

// var_dump($matches); 
// $matches[0][0] - 1 время
//$matches[0][1]  - 2 время
$r = '01:09:02.684';
$l = '01:09:02.684';
$firstTime  = new DateTime($r);
$secondTime = new DateTime($l);
$diff = $secondTime->diff($firstTime)->format("%h:%i:%s:%v");	
echo $diff;
// echo "$matches[0][0]";
// ->format("%h:%i:%s:%v")
// Какой дате прибавляю?
// А нужно к какой?
// К $matches[0][0]
// ок

// $offset = 3663655;
// $secondTime = $firstTime->modify("+$offset millisecond");
// $secondTime->modify("+$diff millisecond");

// // 01:09:02,684 --> 01:09:03,601 Run Forrest, run!
// $oneTime    = '01:09:02,684';
// $secondTime = '01:09:03,601';
// $string     = $oneTime.' --> '.$secondTime." Run Forrest, run!";
// echo $string;
echo PHP_EOL;