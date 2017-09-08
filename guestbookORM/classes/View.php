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
