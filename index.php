<?php
require(__DIR__ . '/function.php');
require(__DIR__ . '/action.php');
//var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гостевая книга</title>
   
</head>
<body>
    <h1> Записи из гостевой книги </h1>
    
    <?php foreach ($file as $line) { ; ?>
        <div class="">
            <p><?php echo $line; ?></p>
         </div>
    <?php } ?>
    
    <!-- <div>
        <p> <?php //echo print_notes($file); ?> </p>
    </div> -->
    <hr>
    <h2>Добавить запись</h2>
    <form action="" method="POST"> 
        <textarea rows="10" cols="45" name="text"></textarea>
        <p></p>
        <input type="submit" name="submit" value="Добавить">
        <input type="reset" name="reset" value="Очистить">
       
    </form>
    

</body>
</html>