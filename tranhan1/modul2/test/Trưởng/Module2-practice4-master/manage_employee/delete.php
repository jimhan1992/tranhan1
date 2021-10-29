<?php
include_once "change_info.php";
$index = $_GET['index'];
removeEmployee($index);
header('location:index.php');