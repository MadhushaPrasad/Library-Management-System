<?php
require_once __DIR__ . "../../model/Book.php";
require_once __DIR__ . "../../repo/BookRepo.php";

class BookRepoImpl implements BookRepo
{
    private $connection;

    /**
     * BookRepoImpl constructor.
     */
    public function __construct()
    {

    }


    public function setConnection(mysqli $conne)
    {
        $this->connection = $conne;
    }


    public function addBook(Book $book): bool
    {
        return null;
    }

    public function deleteBook($bookID): bool
    {
        return null;
    }

    public function updateBook(Book $book): bool
    {
        return null;
    }

    public function searchBook($bookID)
    {
        // TODO: Implement searchBook() method.
    }

    public function getAllBook(): array
    {
        return null;
    }
}