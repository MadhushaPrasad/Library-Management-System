<?php


class DBConnection
{
    private $host='192.168.56.1';
    private $username="root";
    private $password="1234";
    private $database="librarySystem";
    private $port='3306';

    private $connection;

    /**
     * DBConnection constructor.
     */
    public function __construct()
    {
        $this->connection = new mysqli($this->username, $this->password, $this->database, $this->port, $this->host);
    }

    /**
     * DBConnection constructor.
     * @param $host
     * @param $username
     * @param $password
     * @param $database
     * @param $port
     * @param $connection
     */


    /**
     * @return mixed
     */
    public function getConnection()
    {
        return $this->connection;
    }
}