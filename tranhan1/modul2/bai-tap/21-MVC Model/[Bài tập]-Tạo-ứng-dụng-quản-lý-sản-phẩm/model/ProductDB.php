<?php

namespace Model;

class ProductDB
{
    protected $conn;

    public function __construct($connection)
    {
        $this->conn = $connection;
    }

    public function getAllProduct()
    {
        $sql = "SELECT * FROM product";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $products = [];
        foreach ($result as $row) {
            $product = new Product($row['name'], $row['price'], $row['description'], $row['producer']);
            $product->id = $row['id'];
            $products[] = $product;
        }
        return $products;
    }


}