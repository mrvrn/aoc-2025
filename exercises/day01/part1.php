<?php

require_once(__DIR__ . '/../../function/find_input.php');

$current_position = 50;
$amount = 0;

$input_file = find_input_file(__FILE__);
$input_data = file_get_contents($input_file);
$lines      = explode("\n", trim($input_data));

foreach ($lines as $line) {
    $direction = $line[0];
    $value = (int)substr($line, 1);

    if ($direction === 'R') {
        $current_position = ($current_position + $value) % 100;
    } elseif ($direction === 'L') {
        $current_position = ($current_position - $value) % 100;
    }

    if ($current_position == 0) {
        $amount++;
    }
    
    echo "direction: {$direction}, value: {$value}, amount: {$amount}, current_position: {$current_position}<br>";
}