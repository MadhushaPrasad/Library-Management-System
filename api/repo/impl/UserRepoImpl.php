<?php
require_once __DIR__ . "../../repo/UserRpo.php";
require_once __DIR__ . "../../db/DBConnection.php";
require_once __DIR__ . "../../model/User.php";

class UserRepoImpl implements UserRpo
{

    private $connection;

    public function setConnection(mysqli $conne)
    {
        $this->connection = $conne;
    }

    public function addUser(User $user): bool
    {
        $response = $this->connection->query("insert in to user values('{$user->getUsername()}',
                                              '{$user->getEmail()}','{$user->getPassword()}')");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function checkUser($email, $password): bool
    {
        $response = $this->connection->query("select email,password from user where email='{$email}'and password='{$password}'");
    }
}