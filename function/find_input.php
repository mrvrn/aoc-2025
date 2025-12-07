<?php

function find_input_file($current_file_path = ''): string
{
    $directory_path     = dirname($current_file_path);
    $folder_name        = basename($directory_path);
    $input_file_path    = __DIR__ . "/../inputs/{$folder_name}.txt";

    if (!file_exists($input_file_path)) {
        throw new Exception("Input file not found: " . $input_file_path);
    }

    return $input_file_path;
}