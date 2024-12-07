<?php

// Get the units consumed from the user
$units_consumed = (int)readline("Enter the units consumed: ");

// Calculate the bill based on the slabs
if ($units_consumed <= 100) {
    $bill = $units_consumed * 5;
} elseif ($units_consumed <= 200) {
    $bill = 500 + ($units_consumed - 100) * 10;
} else {
    $bill = 1500 + ($units_consumed - 200) * 15;
}

// Display the total bill
echo "Total electricity bill: $" . $bill . "\n";