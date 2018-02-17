<?php
mb_internal_encoding('utf-8');
$strings = file('l.txt');
$output = implode(" ",$strings);
echo "$output\n";
end:
echo "choose method of sort:\n 1 - sort by fio\n 2 - sort by number\n 3 - sort by email\n";
$handle = fopen ("php://stdin","r");
$choose = fgets($handle);
function customex($a){
    return  explode(" ", $a);
}
$arr = array_map("customex", $strings);
$phone = array_column($arr, 1);
$fio = array_column($arr, 0);
$email = array_column($arr, 2);
switch ($choose){
    case 1:
        array_multisort($fio, SORT_STRING, SORT_ASC, $arr);
        foreach ($arr as $value) {
            $r .= implode(" ", $value);
        }break;
    case 2:
        array_multisort($phone, SORT_NUMERIC, SORT_ASC, $arr);
        foreach ($arr as $value) {
            $r .= implode(" ", $value);
        }break;
    case 3:
        array_multisort($email, SORT_STRING, SORT_ASC, $arr);
       foreach ($arr as $value) {
           $r .= implode(" ", $value);
       }break;
   default:
        echo "Wrong number\n";
        goto end;
    }
echo $r;