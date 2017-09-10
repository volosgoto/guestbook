<?php

$host = 'localhost';
$db   = 'guestbook';
$user = 'developer';
$pass = '1111';
$charset = 'utf8';

$dsn = "mysql:host=$host; dbname=$db; charset=$charset";

$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $opt);

 print_r(get_class_methods("PDO"));
//$sth = $pdo->prepare('');
//var_dump($pdo);