
<?php
class GuestBook{
    public $path = __DIR__ . '/data.txt';
    
    public function __construct(){
        return $this->path;
    }

    public function getData():array {
        $file = file($this->path);
        return $file;
        }
        
    public function append($text) {
        //$result  = $text;
        return $text = PHP_EOL . $text;
    }

    public function safe($file) {
        file_put_contents($this->path, $file, FILE_APPEND);
        //echo $this->path . '!!!' . $file;
    }
}


// $text = 'Ку - Ку';

// $guestbook = new GuestBook();
// $file = $guestbook->append($text);
// //$file = $text;
// //var_dump ($file);

// $guestbook->safe($file);
// //var_dump($guestbook->safe());


/*
1. Создайте класс GuestBook, который будет удовлетворять следующим требованиям:
 - В конструктор передается путь до файла с данными гостевой книги, в нём же происходит чтение данных из нее (используйте защищенное свойство объекта для хранения данных)
 - Метод getData() возвращает массив записей гостевой книги
 - Метод append($text) добавляет новую запись к массиву записей
 - Метод save() сохраняет массив в файл
2.* Продумайте - какие части функционала можно вынести в базовый (родительский) класс TextFile,
 а какие - сделать в унаследованном от него классе GuestBook
3. Создайте класс Uploader в соответствии с требованиями:
 - В конструктор передается имя поля формы, от которого мы ожидаем загрузку файла
 - Метод isUploaded() проверяет - был ли загружен файл от данного имени поля
 - Метод upload() осуществляет перенос файла (если он был загружен!) из временного места в постоянное
4.* Попробуйте некоторые методы заканчивать конструкцией return $this; и придумайте этому применение
*/