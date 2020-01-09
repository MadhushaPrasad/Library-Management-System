<?php /** @noinspection ALL */
require_once __DIR__ . "../model/User.php";

interface UserRpo
{

    public function setConnection(mysqli $conne);

    public function addUser(User $user): bool;

    public function checkUser($email, $password): bool;

}