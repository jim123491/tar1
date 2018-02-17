<?php

$strings = file('b.csv');
function customex($a){
    return explode(",", $a);
}
$arr= array_map("customex", $strings);
$writers = array_column($arr, 0);
var_dump( array_count_values($writers));