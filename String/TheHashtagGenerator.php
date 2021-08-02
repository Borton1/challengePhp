https://www.codewars.com/kata/52449b062fb80683ec000024/train/php
function generateHashtag($str) {
    if(empty($str) || ctype_space($str)) return false;
    $str = trim($str);
    $arr = explode(" " , $str);
    $arr = array_filter($arr);
    $arr = array_values($arr);

    for($i =0; $i < count($arr); $i++)
    {
        $arr[$i][0] = strtoupper($arr[$i][0]);
    }

    array_unshift($arr , "#");
    
    $strWithTag = implode("", $arr);
    
    if(iconv_strlen($strWithTag) > 140 || empty($strWithTag))
    {
        return false;
    }
    return  $strWithTag;
}