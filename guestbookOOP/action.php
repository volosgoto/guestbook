<?php
// // Обновление страницы
if ( isset($_POST['submit']) ){
     header("Location: index.php"); 
}

require(__DIR__ . '/Guestbook.php');


// Путь к файлу
//$path = __DIR__ . '/data.txt';

// Текущая запись которую нужно добавить
// $current = '';
// if ( isset($_POST['submit']) && !empty($_POST['text']) ) {
//     $current .= PHP_EOL . (string)$_POST['text'] . '<p> --- </p>';
//     file_put_contents($path, $current, FILE_APPEND);
// }



$guestbook = new GuestBook();
$file = $guestbook->getData();

$text = [];
$current = '';
if ( isset($_POST['submit'] ) || !empty($text) ) {
    $text = (string)$_POST['text'];
    $current = $guestbook->append($text);
    //var_dump($guestbook->append($text)) or die();
}
//var_dump($current);


$guestbook->safe($current);


unset($_POST['submit']);