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
function longestConsec($strarr, $k) {
    if(empty($strarr)){
        return "";
    }
    $startString = implode("",array_slice($strarr,0,$k));
    for($i=$k - 1;$i<count($strarr);$i++){
        if(strlen($startString) < strlen(implode("",array_slice($strarr,$i,$k)))){
            $startString = implode("",array_slice($strarr,$i,$k));
        }
    }
    return $startString;
}
function generateHashtag($str) {
    if(strlen($str) === 0){
        return false;
    }
    $validateString = "#";
    for($i=0;$i<strlen($str);$i++){
        if($str[$i] === " "){
            $j=$i;
            while($str[$j] === " "){
                $j++;
            }
            $validateString .= strtoupper($str[$j]);
            $i += $j - $i;
        }else{
            $validateString .= $str[$i];
        }
    }
    if($validateString[1] !== strtoupper($validateString[1])){
        $validateString[1] = strtoupper($validateString[1]);
    }
    if(strlen($validateString) > 140){
        return false;
    }
    return $validateString;
}

function inArray($array1, $array2) {
    $newArray = [];
    foreach($array1 as $str1){
        foreach($array2 as $str2){
            if(str_contains($str2,$str1) && !in_array($str1,$newArray)){
                array_push($newArray,$str1);
            }
        }
    }
    sort($newArray);
    return $newArray;
}
function dirReduc($arr) {
    $opposite = [
        'NORTH' => 'SOUTH',
        'SOUTH' => 'NORTH',
        'EAST'  => 'WEST',
        'WEST'  => 'EAST'
    ];

    $stack = [];

    foreach ($arr as $direction) {
        if (!empty($stack) && $stack[count($stack) - 1] === $opposite[$direction]) {
            array_pop($stack);
        } else {
            array_push($stack, $direction);
        }
    }
    return $stack;
}
function score($dice)
{
    $combinationsValue = [
        '111' => 1000,
        '666' => 600,
        '555' => 500,
        '444' => 400,
        '333' => 300,
        '222' => 200,
        '1' => 100,
        '5' => 50
    ];
    $combinations = array_keys($combinationsValue);
    sort($dice);
    $stringRes = implode("",$dice);
    $sum = 0;
    foreach($combinations as $comb){
        if(str_contains($stringRes,$comb)){
            $count = 0;
            $stringRes = str_replace($comb,"",$stringRes,$count);
            $sum += $combinationsValue[$comb] * $count;
        }
    }
    return $sum;
}


