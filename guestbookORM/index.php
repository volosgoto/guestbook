<?php
//require __DIR__ . '/classes/GuestBook.php';
require __DIR__ . '/classes/View.php';
require __DIR__ . '/config/Db.php';

//var_dump($pdo);

$stmt = $pdo->query('SELECT * FROM articles');
//var_dump($stmt);

$data = $stmt->fetchAll();
//var_dump($data);
//echo '<pre>' ,
//print_r($data['text']),
//    '</pre>';

//$file = __DIR__ . '/data.txt';
//$gb = new GuestBook($file);
//$data = $gb->getAll();

$view = new View();
$viewName = 'record';
$view->assign($viewName, $data);

$template = include __DIR__ . '/templates/index.php';
$view->display($template);




    

