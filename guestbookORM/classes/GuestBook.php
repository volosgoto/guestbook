<?php
require __DIR__ . '/GuestBookRecord.php';

class GuestBook
{
    protected $file;

    public function __construct($file) {
        return $this->file = $file;
    }
    public function getAll(){

        $res = [];
        $data = file($this->file, FILE_IGNORE_NEW_LINES);

        foreach ($data as $line) {
            $res[] = new GuestBookRecord($line);
        }

        return $res;
//        return $data = file($this->file, FILE_IGNORE_NEW_LINES);
    }
}
