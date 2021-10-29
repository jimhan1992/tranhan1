<?php

namespace Model;

use Model\Database;
use PDOException;

class DBProduct
{
    public $pdo;

    public function __construct()
    {
        $database = new Database("root", "");
        $this->pdo = $database->connect();
    }

    public function add($nameProduct, $typeProduct, $priceProduct, $quantityProduct,$description)
    {
        try {
            $sql = "INSERT INTO products(nameProduct,typeProduct,priceProduct,quantityProduct,description) value (:nameProduct,:typeProduct,:priceProduct,:quantityProduct,:description)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam('nameProduct', $nameProduct);
            $stmt->bindParam('typeProduct', $typeProduct);
            $stmt->bindParam('priceProduct', $priceProduct);
            $stmt->bindParam('quantityProduct', $quantityProduct);
            $stmt->bindParam('description', $description);
            $stmt->execute();
        } catch (PDOException $PDOException) {
            echo "add error";
            exit();
        }

    }

    public function getAll()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getId($id){
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function delete($id){
        $sql = "DELETE FROM products WHERE id =$id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }
    public function edit($id,$nameProduct, $typeProduct, $priceProduct, $quantityProduct,$description){
        $sql = "UPDATE products SET nameProduct = :nameProduct, typeProduct = :typeProduct, priceProduct = :priceProduct, quantityProduct = :quantityProduct, description = :description WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam('id', $id);
        $stmt->bindParam('nameProduct', $nameProduct);
        $stmt->bindParam('typeProduct', $typeProduct);
        $stmt->bindParam('priceProduct', $priceProduct);
        $stmt->bindParam('quantityProduct', $quantityProduct);
        $stmt->bindParam('description', $description);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function search($key){
        $sql = "SELECT * FROM products WHERE nameProduct LIKE N'%$key%'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }


}