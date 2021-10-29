<?php

namespace Model;

use PDO;

class DBconnect
{
    private $dsn;
    private $user;
    private $password;

    public function __construct($dsn, $user, $password)
    {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->password = $password;
    }


    public function connect()
    {
        try {
            $conn = new PDO($this->dsn, $this->user, $this->password);
        } catch (\PDOException $e) {
            return $e->getMessage();
        }
        return $conn;
    }

}