<?php
require_once __DIR__."../model/Book.php";

interface BookRepo
{
    public function setConnection(mysqli $conne);


    public function addBook(Book $book):bool;

    public function deleteBook($bookID):bool;

    public function updateBook(Book $book):bool;

    public function searchBook($bookID);

    public function getAllBook():array;
}