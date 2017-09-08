<?php
//require __DIR__ . '/classes/GuestBook.php';
require __DIR__ . '/classes/View.php';

$file = __DIR__ . '/data.txt';
$gb = new GuestBook($file);
$data = $gb->getAll();

$view = new View();
$viewName = 'record';
$view->assign($viewName, $data);
//var_dump($view->assign($viewName, $data));


//include __DIR__ . '/templates/index.php';

$template = include __DIR__ . '/templates/index.php';
$view->display($template);
//var_dump($view->display($template));




    

