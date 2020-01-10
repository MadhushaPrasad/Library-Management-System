<?php
require_once __DIR__ . "../../model/Book.php";
require_once __DIR__ . "../../repo/BookRepo.php";

class BookRepoImpl implements BookRepo
{
    private $connection;

    public function setConnection(mysqli $conne)
    {
        $this->connection = $conne;
    }


    public function addBook(Book $book): bool
    {
        $response = $this->connection->query("insert into book values('{$book->getTitle()}','{$book->getAuthor()}',
                                        '{$book-> getAvailable()}','{$book-> getQuantity()}',{$book-> getPrice()})");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteBook($bookID): bool
    {
        $response = $this->connection->query("delete from book where bId='{$bookID}'");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function updateBook(Book $book): bool
    {
        $response = $this->connection->query("update book set title='{$book->getTitle()}',author='{$book->getAuthor()}',aviliable='{$book->getAvailable()}' where bId='{$book->getBId()}'");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function searchBook($bookID)
    {
        $resultSet = $this->connection->query("select * from book where bId='{$bookID}'");
        return $resultSet->fetch_assoc();
    }

    public function getAllBook(): array
    {
        $resultSet = $this->connection->query("select * from book");
        return $resultSet->fetch_all();
    }
}