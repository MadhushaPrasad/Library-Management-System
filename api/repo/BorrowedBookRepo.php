<?php
require_once __DIR__ . "../model/Book.php";
require_once __DIR__ . "../model/Member.php";

interface BorrowedBookRepo
{
    public function borrowedBook(Book $book, Member $member);
}