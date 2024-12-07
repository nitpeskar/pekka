<?php

$number = (int)readline("Enter a number: ");

if ($number > 0) {
    echo "$number is positive.\n";
    return;
}

if ($number < 0) {
    echo "$number is negative.\n";
    return;
}

echo "$number is zero.\n";

?>