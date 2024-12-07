<?php

$temperature = (float)readline("Enter temperature value: ");
$unit = strtoupper(readline("Enter unit (C for Celsius, F for Fahrenheit): "));

if ($unit === 'C') {
    $converted_temperature = ($temperature * 9/5) + 32;
    echo "$temperature Celsius is $converted_temperature Fahrenheit.\n";
} elseif ($unit === 'F') {
    $converted_temperature = ($temperature - 32) * 5/9;
    echo "$temperature Fahrenheit is $converted_temperature Celsius.\n";
} else {
    echo "Invalid unit. Please enter 'C' or 'F'.\n";
}