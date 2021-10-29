<?php

namespace Controller;

use Model\DBconnect;
use Model\ProductDB;
use Model\Product;

class ProductController
{
    protected $productDB;

    public function __construct()
    {
        $conn = new DBconnect("mysql:host=localhost;dbname=21_product", "root", "hanND92@@");
        $this->productDB = new ProductDB($conn->connect());
    }

    public function index()
    {
        $product = $this->productDB->getAllProduct();
        include 'view/list.php';
    }



}