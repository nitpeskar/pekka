<?php

$units_consumed = (int)readline("Enter the units consumed: ");

if ($units_consumed <= 100) {
    $bill = $units_consumed * 5;
} elseif ($units_consumed <= 200) {
    $bill = 500 + ($units_consumed - 100) * 10;
} else {
    $bill = 1500 + ($units_consumed - 200) * 15;
}

echo "Total electricity bill: $" . $bill . "\n";