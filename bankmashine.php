<?php
$_20 = 0;
$_50 = 0;
$_100 = 0;
$_200= 0;
$_500 =0;
echo "Enter amaunt please! \n";
$handle = fopen("php://stdin","r");
$amount = fgets($handle);

if(($amount % 10 != 0) || ($amount == 10) || ($amount == 30)){
    echo "no-no-no";
} elseif (($amount % 50 == 0)) {
    $_500 = intdiv($amount, 500);
    $amount -= $_500 * 500;
    $_200 = intdiv($amount, 200);
    $amount -= $_200 * 200;
    $_100 = intdiv($amount, 100);
    $amount -= $_100 * 100;
    $_50 = intdiv($amount, 50);
} elseif ($amount % 20 != 0) {
    $_50 = 1;
    $amount -= 50;
    $_500 = intdiv($amount, 500);
    $amount -= $_500 * 500;
    $_200 = intdiv($amount, 200);
    $amount -= $_200 * 200;
    $_100 = intdiv($amount, 100);
    $amount -= $_100 * 100;
    $_20 = intdiv($amount, 20);
    $amount -= $_20 * 20;
    }
    else {
        $_500 = intdiv($amount, 500);
        $amount -= $_500 * 500;
        $_200 = intdiv($amount, 200);
        $amount -= $_200 * 200;
        $_100 = intdiv($amount, 100);
        $amount -= $_100 * 100;
        $_20 = intdiv($amount, 20);
        $amount -= $_20 * 20;
}
echo "We have $_500 of 500, $_200 of 200, $_100 of 100, $_50 of 50, $_20 of 20\n";

