<?php
$handle = fopen ("php://stdin","r");
$grid = [[1,2,3],[4,5,6],[7,8,9]];
$x = "x";
$o = "o";
function output($a){
    for ($i = 0; $i < 3; $i++) {
        for ($r = 0; $r < 3; $r++) {
            echo $a[$i][$r] . "|";
        }
        echo "\n" . "_|_|_|\n";
    }
}
output($grid);
end:
echo "1 Player x enter your number\n";
$number1 = fgets($handle);
function putitem ($num, $array, $player)
{
    switch ($num) {
        case 1:
            $array[0][0] = "$player";
            break;
        case 2:
            $array[0][1] = "$player";
            break;
        case 3:
            $array[0][2] = "$player";
            break;
        case 4:
            $array[1][0] = "$player";
            break;
        case 5:
            $array[1][1] = "$player";
            break;
        case 6:
            $array[1][2] = "$player";
            break;
        case 7:
            $array[2][0] = "$player";
            break;
        case 8:
            $array[2][1] = "$player";
            break;
        case 9:
            $array[2][2] = "$player";
            break;
        default:
            echo "Wrong number\n";
    } return $array;
}
function returntrue ($num, $array, $player)
{
    switch ($num) {
        case 1:
            $array[0][0] = "$player";
            break;
        case 2:
            $array[0][1] = "$player";
            break;
        case 3:
            $array[0][2] = "$player";
            break;
        case 4:
            $array[1][0] = "$player";
            break;
        case 5:
            $array[1][1] = "$player";
            break;
        case 6:
            $array[1][2] = "$player";
            break;
        case 7:
            $array[2][0] = "$player";
            break;
        case 8:
            $array[2][1] = "$player";
            break;
        case 9:
            $array[2][2] = "$player";
            break;
        default:
            echo "Wrong number\n";
            return true;
    } return false;
}
$func1 = returntrue($number1,$grid,$x);
if ($func1 == true) goto end;
$grid = putitem ($number1,$grid,$x);
output($grid);
end1:
 echo "2 Player o enter you number\n";
$number2 = fgets($handle);
if ($number2 != $number1) {
    $func1 = returntrue($number2,$grid,$o);
    if ($func1 == true) goto end1;
    $grid = putitem ($number2,$grid,$o);
}else{
    echo "You cant choose this number\n";
    goto end1;
}
output($grid);
 end2:
echo "3 Player x enter you number\n";
$number3 = fgets($handle);
if (($number3 != $number2) && ($number3 != $number1 )) {
    $func1 = returntrue($number3,$grid,$x);
    if ($func1 == true) goto end2;
    $grid = putitem ($number3,$grid,$x);
}else{
    echo "You cant choose this number\n";
    goto end2;
}
output($grid);
end3:
echo "4 Player o enter you number\n";
$number4 = fgets($handle);
if (   ($number4 != $number3) && ($number4 != $number2)
    && ($number4 != $number1)) {
    $func1 = returntrue($number4,$grid,$o);
    if ($func1 == true) goto end3;
    $grid = putitem ($number4,$grid,$o);
}else{
    echo "You cant choose this number\n";
    goto end3;
}
output($grid);
function chekLine($ar)
{
    if ((($ar[0][0] == $ar[0][1]) && ($ar[0][0] == $ar[0][2])) ||
        (($ar[0][0] == $ar[1][0]) && ($ar[0][0] == $ar[2][0])) ||
        (($ar[1][0] == $ar[1][1]) && ($ar[1][0] == $ar[1][2])) ||
        (($ar[2][0] == $ar[2][1]) && ($ar[2][0] == $ar[2][2])) ||
        (($ar[0][1] == $ar[1][1]) && ($ar[0][1] == $ar[2][1])) ||
        (($ar[0][2] == $ar[1][2]) && ($ar[0][2] == $ar[2][2])) ||
        (($ar[0][0] == $ar[1][1]) && ($ar[0][0] == $ar[2][2])) ||
        (($ar[0][2] == $ar[1][1]) && ($ar[0][2] == $ar[2][0]))     ){
        return true;
    }
        return false;
}
end4:
echo "5 Player x enter you number\n";
$number5 = fgets($handle);
if (   ($number5 != $number4) && ($number5 != $number3)
    && ($number5 != $number2) && ($number5 != $number1) ) {
    $func1 = returntrue($number5,$grid,$x);
    if ($func1 == true) goto end4;
    $grid = putitem ($number5,$grid,$x);
}else{
    echo "You cant choose this number\n";
    goto end4;
}
output($grid);
$func = chekLine($grid);
if ($func == true) goto ex;
end5:
echo "6 Player o enter you number\n";
$number6 = fgets($handle);
if (   ($number6 != $number5) && ($number6 != $number4 )
    && ($number6 != $number3 ) && ($number6 != $number2)
    && ($number6 != $number1) ) {
    $func1 = returntrue($number6,$grid,$o);
    if ($func1 == true) goto end5;
    $grid = putitem ($number6,$grid,$o);
}else{
    echo "You cant choose this number\n";
    goto end5;
}
output($grid);
$func = chekLine($grid);
if ($func == true) goto ex;
end6:
echo "7 Player x enter you number\n";
$number7 = fgets($handle);
if (   ($number7 != $number6) && ($number7 != $number5)
    && ($number7 != $number4) && ($number7 != $number3)
    && ($number7 != $number2) && ($number7 != $number1) ) {
    $func1 = returntrue($number7,$grid,$x);
    if ($func1 == true) goto end6;
    $grid = putitem ($number7,$grid,$x);
}else{
    echo "You cant choose this number\n";
    goto end6;
}
output($grid);
$func = chekLine($grid);
if ($func == true) goto ex;
end7:
echo "8 Player o enter you number\n";
$number8 = fgets($handle);
if (   ($number8 != $number7) && ($number8 != $number6)
    && ($number8 != $number5) && ($number8 != $number4)
    && ($number8 != $number3) && ($number8 != $number2)
    && ($number8 != $number1)  ) {
    $func1 = returntrue($number8,$grid,$o);
    if ($func1 == true) goto end7;
    $grid = putitem ($number8,$grid,$o);
}else{
    echo "You cant choose this number\n";
    goto end7;
}output($grid);
$func = chekLine($grid);
if ($func == true) goto ex;
end8:
echo "9 Player x enter you number\n";
$number9 = fgets($handle);
if (($number9 != $number8) && ($number9 != $number7) &&
    ($number9 != $number6) && ($number9 != $number5) &&
    ($number9 != $number4) && ($number9 != $number3) &&
    ($number9 != $number2) && ($number9 != $number1) ) {
    $func1 = returntrue($number9,$grid,$x);
    if ($func1 == true) goto end8;
    $grid = putitem ($number9,$grid,$x);
}else{
    echo "You cant choose this number\n";
    goto end8;
}output($grid);
$func = chekLine($grid);
if ($func == true) {
    goto ex;
}
else
   echo "Draw\n";
exit("Goodbay");
ex: echo "Y O U   W I N  !\n";
exit("G A M E   O V E R  !");
