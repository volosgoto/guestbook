<?php
require __DIR__ . '/GuestBook.php';

class View
{
    protected $value = [];
    protected $name;
    protected $template;

    public function __construct() {

    }
    public function assign($name, $value) { // Template name, Template data
        $this->name = $name;
        return $this->value = $value;
    }
    public function display($template){
        return $this->template = $template;
        // __DIR__ . '/templates/index.php';
    }
}


/*
1. Создайте объект класса View, удовлетворяющий следующим требованиям:
 - Конструктор не имеет аргументов
- Есть метод assign($name, $value), чья задача - сохранить данные,
передаваемые в шаблон по заданному имени (используйте защищенное свойство - массив для хранения этих данных)
 - Есть метод display($template), который отображает указанный шаблон с заранее сохраненными данными
      - * Метод render($template), который аналогичен методу display(), но не выводит шаблон с данными в браузер, а возвращает его
*/