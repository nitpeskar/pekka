<?php

define('USERNAME', 'admin');
define('PASSWORD', 'password123');

$username = readline("Enter username: ");
$password = readline("Enter password: ");

// Check credentials
if ($username === USERNAME && $password === PASSWORD) {
    echo "Login successful!\n";
} else {
    echo "Login failed. Incorrect username or password.\n";
}