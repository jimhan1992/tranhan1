<?php

namespace Model;

use PDO;
use PDOException;

class Database
{
    protected $username;
    protected $password;

    public function __construct($username,$password)
    {
        $this->username=$username;
        $this->password=$password;
    }
    public function connect(){
        try {
            return new PDO("mysql:host=localhost;dbname=qlhh",$this->username,$this->password);
        }catch (PDOException $PDOException){
            echo "error database";
            exit();
        }
    }
}