<?php

namespace App\Model;

use PDO;

class DBConnection
{
    protected string $dsn;
    protected string $user;
    protected string $pass;

    function __construct()
    {
        $this->dsn = 'mysql:host=127.0.0.1;dbname=toy_store';
        $this->user = 'admin';
        $this->pass = '123456';
    }

    function connect()
    {
        try {
            return new PDO($this->dsn, $this->user, $this->pass);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}