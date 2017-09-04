<?php
require(__DIR__ . '/action.php');

function read_file($path): array {
    $file = file($path);
    return $file;
}

$file = read_file($path);
//var_dump($file);


// Tests
assert( is_array(read_file($path)) == true ); 

// function print_notes($file) {
//     $line = '';
//     foreach ($file as $value) {
                
//         $line .= $value . PHP_EOL;

//     }
//     return nl2br($line);
// }