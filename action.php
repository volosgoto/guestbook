<?php
// Обновление страницы
if ( isset($_POST['submit']) ){
     header("Location: index.php"); 
}

// Путь к файлу
$path = __DIR__ . '/data.txt';

// Текущая запись которую нужно добавить
$current = '';
if ( isset($_POST['submit']) && !empty($_POST['text']) ) {
    $current .= PHP_EOL . (string)$_POST['text'] . '<p> --- </p>';
    file_put_contents($path, $current, FILE_APPEND);
}

unset($_POST['submit']);