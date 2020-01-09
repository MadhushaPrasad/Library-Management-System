<?php
require_once __DIR__ . "../model/Member.php";

interface MemberBO
{

    public function addMember(Member $member);

    public function updateMember(Member $member);

    public function deleteMember($id);

    public function searchMember($id);

    public function getAllMember();

}