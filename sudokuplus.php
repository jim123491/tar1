<?php
define("TARGET_SUM", 405);
$oneSizeArray = array_fill(0,81,'');
$emtySudoku = array_chunk($oneSizeArray, 9);
function output($a){
    echo "___________ ___________ ___________\n";
    for ($i = 0; $i <= 8; $i++) {
        for ($r = 0; $r <= 8; $r++) {
            echo " " . $a[$i][$r] . " |";
        }
        echo "\n___|___|___|___|___|___|___|___|___|\n";
    }
}
function multi_array_sum($array){
    $sum = 0;
    foreach ($array as $subarray)
        $sum += array_sum($subarray);
    return $sum;
}
function chek_square($value, $array, $a, $i){
    if($i <= 2) $stroka = 0;
    elseif ($i <= 5) $stroka = 3;
    else $stroka = 6;
    if($a <= 2) $stolbec = 0;
    elseif ($a <= 5) $stolbec = 3;
    else $stolbec = 6;
    $slise = '';
    for ($i =0; $i <3; $i++) {
        $slise .= implode("",array_slice($array[$stroka], $stolbec,3));
        $stroka++;
    }
    $chunks = preg_split("//", $slise);
    if(in_array($value, $chunks)) return false;
    else return true;
}
function column_check($value, $array, $a){
    $column = array_column($array, $a);
    if (in_array($value, $column)) return false;
    else return true;
}
function line_chek($value, $array, $i){
    if(in_array($value, $array[$i]))return false;
    else return true;
}
function total_chek($value, $array, $a, $i){
    if (column_check($value, $array, $a)){
        if (line_chek($value, $array, $i))
            if (chek_square($value, $array, $a,$i))return true;
    }else return false;
}
while((multi_array_sum($emtySudoku)) <= TARGET_SUM) {
    $oneSizeArray = array_fill(0,81,'');
    $emtySudoku = array_chunk($oneSizeArray, 9);
    $ii = 1;
    while ($ii < 100) {
        for ($i = 0; $i < 9; $i++) {
            for ($a = 0; $a < 9; $a++) {
                $item = rand(1, 9);
                if (total_chek($item, $emtySudoku, $a, $i)) {
                    $emtySudoku[$i][$a] = $item;
                }
            }
        }
        if (multi_array_sum($emtySudoku) == TARGET_SUM) {
            $emtySudokucomplede = $emtySudoku;
           goto end;
        }$ii++;
    }
}
function fuling_sudoku($arr, $t){
    for ($a = 0; $a < $t; $a++) {
        $rand = rand(0, 9);
        $rand2 = rand(0, 9);
        $arr[$rand2][$rand] = " ";
    }
        return $arr;
}
end:
echo "Enter the difficulty level of the creation:\n1 - Hard\n2 - Midle\n3 - Ease\n";
$handle = fopen ("php://stdin","r");
$choice = fgets($handle);

switch ($choice){
    case 1:
        $emtySudoku = fuling_sudoku($emtySudoku,130);
        break;
    case 2:
        $emtySudoku = fuling_sudoku($emtySudoku,100);
        break;
    case 3:
        $emtySudoku = fuling_sudoku($emtySudoku,80);
        break;
    default:
        echo "Wrong number\n";
        goto end;
}
output($emtySudoku);
end1:
echo "\nWant the script to solve it for you?\nEnter 1 for yes  or 2 for no\n";
$choice2 = fgets($handle);
switch ($choice2){
    case 1:
        output($emtySudokucomplede);
        break;
    case 2:
        output($emtySudoku);
        echo "Ok man, solve your self";
        break;
    default:
        echo "Wrong choice\n";
        goto end1;
}
