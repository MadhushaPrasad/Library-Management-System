<?php


class DBConnection
{
    private $host;
    private $username;
    private $password;
    private $database;
    private $port;

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