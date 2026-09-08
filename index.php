<?php
require_once 'book.php';
require_once 'member.php';
require_once 'digitalbook.php';

$book = new Book("Pemrograman Web", "Billy Ibrahim");
$member = new Member("Demas Darrel");
$digitalBook = new DigitalBook("Belajar Git & GitHub", "Hasbi", "5MB");

echo "Buku: " . $book->title . "\n";
echo "Member: " . $member->name . "\n";
echo "Digital Book: " . $digitalBook->title . " (" . $digitalBook->fileSize . ")\n";