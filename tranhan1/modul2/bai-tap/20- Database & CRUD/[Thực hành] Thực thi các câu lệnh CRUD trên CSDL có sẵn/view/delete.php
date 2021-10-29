<?php
include_once "../src/Database.php";
include_once "../src/ReaderManager.php";
$bill = new \Src\ReaderManager();
$id = $_REQUEST["id"];
$bill->delete($id);
//header("Location: ../index.php");

?>