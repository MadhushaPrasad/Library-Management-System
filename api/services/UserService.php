<?php
require_once __DIR__ . "../bo/impl/UserBoImpl.php";

$method = $_SERVER['REQUEST_METHOD'];
$userbo = new UserBoImpl();

switch ($method) {
    case "GET":
        $action = $_GET["action"];
}