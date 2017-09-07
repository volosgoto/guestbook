<?php
//require __DIR__ . 'GuestBook.php';

class GuestBookRecord
{
    protected $message;

    public function __construct($message) {
        return $this->message = $message;
    }

    function getMessage(){
        return $this->message;
    }

}