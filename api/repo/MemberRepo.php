<?php
require_once __DIR__."../model/Member.php";

interface MemberRepo
{
    public function setConnection(mysqli $conne);


    public function addMember(Member $member):bool;

    public function deleteMember($memberID):bool;

    public function updateMember(Member $member):bool;

    public function searchMember($memberID);

    public function getAllMember():array;
}