<?php
require_once __DIR__ . "../model/User.php";

interface UserBo
{
    public function addUser(User $user);

    public function checkUser($email, $password);
}