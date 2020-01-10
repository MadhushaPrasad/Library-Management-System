<?php
require_once __DIR__ . "../bo/impl/BookBOImpl.php";

//checking the method type
$method = $_SERVER["REQUEST_METHOD"];
$bookBo = new BookBOImpl();

switch ($method) {
    case "GET":
        $action = $_GET["action"];
        switch ($action) {
            case "search":
                $bookID = $_GET("title");
                $res = $bookBo->searchBook($bookID);
                echo json_encode($res);
                break;
            case "getAll":
                $bookArray = $bookBo->getAllBook();
                echo json_encode($bookArray);
                break;
            case "delete":
                $bookID = $_GET("title");
                $res = $bookBo->deleteBook($bookID);
                echo $res;
                break;
        }
        break;
    case "POST":
        $action = $_GET["action"];
        switch ($action) {
            case "save":
                $bookTitle = $_POST["title"];
                $bookAuthor = $_POST["author"];
                $bookAvailable = $_POST["available"];
                $bookQty = $_POST["qty"];
                $bookPrice = $_POST["price"];
                $newBook = new Book($bookTitle, $bookAuthor, $bookAvailable, $bookQty, $bookPrice);
                $res = $bookBo->addBook($newBook);
                echo $res;
                break;
            case "update":
                $bookTitle = $_POST["title"];
                $bookAuthor = $_POST["author"];
                $bookAvailable = $_POST["available"];
                $bookQty = $_POST["qty"];
                $bookPrice = $_POST["price"];
                $newBook = new Book($bookTitle, $bookAuthor, $bookAvailable, $bookQty, $bookPrice);
                $res = $bookBo->updateBook($newBook);
                echo $res;
                break;
        }
        break;
    default:
        echo "Sorry system Error..";
}