https://www.codewars.com/kata/525f50e3b73515a6db000b83/train/php
function createPhoneNumber($numbersArray) {
      $pattern = ['('];
    if(count($numbersArray) != 10)
    {
        return 0;
    }else{
        for($i = 0; $i < 3; $i++)
        {
            $pattern[] = array_shift($numbersArray);
        }
        $pattern[] = ')';
        $first_part = implode('' , $pattern);
        for($i = 0; $i < 3; $i++)
        {
            $second_part[] = array_shift($numbersArray);
        }
        for($i = 0; $i < 4; $i++)
        {
            $third_part[] = array_shift($numbersArray);
        }
        $second_part = implode('' , $second_part);
        $third_part  = implode('' , $third_part);
        return $number = $first_part.' '.$second_part.'-'.$third_part;
        
    }
}

---------------------Исправлено-----------------------
function createPhoneNumber($numbersArray) {
  if(count($numbersArray) == 10) return vsprintf("(%d%d%d) %d%d%d-%d%d%d%d",$numbersArray);
    return 0;
}