<?php
require_once __DIR__ . "../BookBO.php";
require_once __DIR__ . "../../model/Book.php";
require_once __DIR__ . "../../db/DBConnection.php";
require_once __DIR__ . "../../repo/impl/BookRepoImpl.php";

class BookBOImpl implements BookBO
{

    public function addBook(Book $book)
    {
        $bookRepo = new BookRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $bookRepo->setConnection($connection);
        $bookOB = new Book($book->getTitle(), $book->getAuthor(), $book->getAvailable(),
            $book->getQuantity(), $book->getPrice());
        $res = $bookRepo->addBook($bookOB);
        if ($res) {
            return true;
        } else {
            return $connection->error;
        }
    }

    public function updateBook(Book $book)
    {
        $bookRepo = new BookRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $bookRepo->setConnection($connection);
        $bookOB = new Book($book->getTitle(), $book->getAuthor(), $book->getAvailable(),
            $book->getQuantity(), $book->getPrice());
        $res = $bookRepo->updateBook($bookOB);
        if ($res) {
            return true;
        } else {
            return $connection->error;
        }
    }

    public function deleteBook($id)
    {
        $bookRpo = new BookRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $bookRpo->setConnection($connection);
        $res = $bookRpo->deleteBook($id);
        if ($res) {
            return true;
        } else {
            return $connection->error;
        }
    }

    public function searchBook($id)
    {
        $bookRepo = new BookRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $bookRepo->setConnection($connection);
        $book = $bookRepo->searchBook($id);
        return $book;
    }

    public function getAllBook()
    {
        $bookRepo = new BookRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $bookRepo->setConnection($connection);
        $bookArray = $bookRepo->getAllBook();
        return $bookArray;
    }
}