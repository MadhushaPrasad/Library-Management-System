<?php


class Member
{
    private $name;
    private $gender;
    private $dOb;
    private $mOd;
    private $membership;
    private $address;
    private $tel;

    /**
     * Member constructor.
     * @param $name
     * @param $gender
     * @param $dOb
     * @param $mOd
     * @param $membership
     * @param $address
     * @param $tel
     */
    public function __construct($name, $gender, $dOb, $mOd, $membership, $address, $tel)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->dOb = $dOb;
        $this->mOd = $mOd;
        $this->membership = $membership;
        $this->address = $address;
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getDOb()
    {
        return $this->dOb;
    }

    /**
     * @param mixed $dOb
     */
    public function setDOb($dOb)
    {
        $this->dOb = $dOb;
    }

    /**
     * @return mixed
     */
    public function getMOd()
    {
        return $this->mOd;
    }

    /**
     * @param mixed $mOd
     */
    public function setMOd($mOd)
    {
        $this->mOd = $mOd;
    }

    /**
     * @return mixed
     */
    public function getMembership()
    {
        return $this->membership;
    }

    /**
     * @param mixed $membership
     */
    public function setMembership($membership)
    {
        $this->membership = $membership;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }
}