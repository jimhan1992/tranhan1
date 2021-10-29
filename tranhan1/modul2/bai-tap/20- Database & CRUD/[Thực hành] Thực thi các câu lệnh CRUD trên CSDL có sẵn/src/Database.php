<?php

namespace Src;

use PDO;
use PDOException;

class Database
{
    public $username;
    public $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function connect()
    {
        try {
            return new PDO ("mysql:host = localhost;dbname=QLTV", $this->username, $this->password);
        } catch (PDOException $PDOException) {
            echo "Database error";
            exit();
        }

    }

}