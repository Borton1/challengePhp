https://www.codewars.com/kata/546f922b54af40e1e90001da/train/php
function alphabet_position(string $s): string {
$arr_letter = [
'A' => 1,
'B' => 2,
'C' => 3,
'D' => 4,
'E' => 5,
'F' => 6,
'G' => 7,
'H' => 8,
'I' => 9,
'J' => 10,
'K' => 11,
'L' => 12,ы
'M' => 13,
'N' => 14,
'O' => 15,
'P' => 16,
'Q' => 17,
'R' => 18,
'S' => 19,
'T' => 20,
'U' => 21,
'V' => 22,
'W' => 23,
'X' => 24,
'Y' => 25,
'Z' => 26

];


    $supper = strtoupper($s);
    for($i = 0; $i <  iconv_strlen($supper); $i++)
    {
       if(ctype_alpha($supper[$i]))
       {
           $index = $supper[$i];
           $newstr[] = $arr_letter[$index];
       }

    }
    if(!empty($newstr))
    {
        $newstr = implode(" ", $newstr);
        $newstr = trim($newstr);
        return $newstr;
    }else{
      return '';
    }

}