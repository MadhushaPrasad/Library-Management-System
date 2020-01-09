<?php

require_once __DIR__ . "../../model/User.php";
require_once __DIR__ . "../UserBo.php";
require_once __DIR__ . "../../repo/impl/UserRepoImpl.php";
require_once __DIR__ . "../../db/DBConnection.php";

class UserBoBoImpl implements UserBo
{


    /**
     * UserBoBoImpl constructor.
     */
    private $con;

    /**
     * UserBoBoImpl constructor.
     */
    public function __construct()
    {
        $this->con = (new DBConnection())->getConnection();
    }

    public function addUser(User $user)
    {
        $userRepo = new UserRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $userRepo->setConnection($connection);
        $us = new User($user->getUsername(), $user->getEmail(), $user->getPassword());
        $res = $userRepo->addUser($us);
        if ($res) {
            return true;
        } else {
            return $connection;
        }
    }

    public function checkUser($email, $password): bool
    {
        return true;
    }
}