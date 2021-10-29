<?php
include_once "product.php";
include_once "Manager.php";

use Services\Manager;
use Models\product;

$productManager = new \Service\Manager();
$productManager->add(new product("Laptop"));
$productManager->add(new product("Mobile"));

$products = $productManager->getProducts();
foreach ($products as $product) {
    echo $product->getName() . "<br/>";
}