<?php

class Connect
{
    private $host = '127.0.0.1';
    private $dbname = 'universal';
    private $user = 'root';
    private $pass = 'root';
    private $DBH;

    function __construct()
    {

        try {
            $this->DBH = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        $this->DBH->exec("set names utf8");
    }

    function getDBH()
    {
        return $this->DBH;
    }
}

