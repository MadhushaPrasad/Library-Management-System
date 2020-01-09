<?php


interface BookBO
{
    public function addBook(Book $book);

    public function updateBook(Book $book);

    public function deleteBook($id);

    public function searchBook($id);

    public function getAllBook();
}