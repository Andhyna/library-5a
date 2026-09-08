<?php
require_once 'book.php';

class DigitalBook extends Book {
    public $fileSize;

    public function __construct($title, $author, $fileSize) {
        parent::__construct($title, $author);
        $this->fileSize = $fileSize;
    }
}