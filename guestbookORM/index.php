<?php
require __DIR__ . '/classes/GuestBook.php';

$file = __DIR__ . '/data.txt';
$gb = new GuestBook($file);

//var_dump($gb->getAll());

$data = $gb->getAll();
include __DIR__ . '/templates/index.php';



    

