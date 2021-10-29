<?php
include_once "../app/EmployeeManager.php";
$index = $_REQUEST['index'];

$employeeManager = new \App\EmployeeManager('../data.json');
$employeeManager->remove($index);

// Sau khi xoa thi quay lai trang danh sach
header('location: ../index.php');

