<?php
$numbers = [1,2,3,4,5,6,7,8,9,0];
function createPhoneNumber($numbersArray) {
    $first = implode("",array_slice($numbersArray,0,3));
    $second = implode("",array_slice($numbersArray,3,3));
    $last = implode("",array_slice($numbersArray,6,3));
    $number = "($first) $second-$last";
    return $number;
}

function narcissistic(int $value): bool {
    $numsArray = str_split((string)$value);
    $arrayLen = count($numsArray);
    $sum = 0;
    foreach($numsArray as $num){
        $sum += pow($num,$arrayLen);
    }

    return $sum === $value?true:false;
}
function maskify(string $cc): string {
    $len = strlen($cc);
    if($len < 5){
        return $cc;
    }else{
        $result = '';
        $countReplace = $len - 4;
        for($i=0;$i<$len;$i++){
            if($countReplace > 0){
                $countReplace--;
                $result .= '#';
            }else{
                $result .= $cc[$i];
            }
        }
        return $result;
    }
}
$first = [1,100,50,-51,1,1];
$second = [1,2,3,4,3,2,1];
$last = [1,2,3,4,5,6];
$test0 = [20,10,-80,10,10,15,35];
function find_even_index($arr){
    for($i = 0;$i<count($arr);$i++){
        $b = $i;
        $a = $i;
        $leftSum = 0;
        $rightSum = 0;
        while($a > 0){
            $a--;
            $leftSum += $arr[$a];
        }
        while($b < count($arr) - 1){
            $b++;
            $rightSum += $arr[$b];
        }
        if($leftSum === $rightSum){
            return $i;
        }
    }
    return -1;
}

function binaryArrayToNumber(array $arr): int
{
    $num = (int)implode('',$arr);
    return base_convert($num,2,10);
}
function toCamelCase($str){
    $newStr = '';
    for($i=0;$i<strlen($str);$i++){
        if($str[$i] === '-' || $str[$i] === '_'){
            $newStr .= strtoupper($str[$i+1]);
            $i++;
        }else{
            $newStr .= $str[$i];
        }
    }
    return $newStr;
}
function toWeirdCase($string) {
    $newArray = explode(' ',$string);
    $resultArray = [];
    foreach($newArray as $arr){
        $newArr = "";
        for($i=0;$i<strlen($arr);$i++){
            if($i%2==0){
                $newArr .= strtoupper($arr[$i]);
            }else{
                $newArr .= strtolower($arr[$i]);
            }
        }
        $resultArray[] = $newArr;
    }
    $result = implode(' ',$resultArray);
    return $result;
}
echo (toWeirdCase('Hello world foo bar baz'));
