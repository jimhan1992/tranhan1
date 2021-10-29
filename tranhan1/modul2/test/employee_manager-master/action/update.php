<?php

include_once "../app/EmployeeManager.php";

$index = $_REQUEST['index'];

$employeeManager = new \App\EmployeeManager('../data.json');
$employeeManager->edit($_POST, $index);
header('location: ../index.php');
