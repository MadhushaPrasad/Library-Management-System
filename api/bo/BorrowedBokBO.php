<?php


interface BorrowedBokBO
{
    public function borrowedBook(Member $member, Book $book);
}