<?php

include_once "../app/EmployeeManager.php";
$employeeManager = new \App\EmployeeManager('../data.json');
$employeeManager->add($_REQUEST);
// Sau khi them thi quay lai trang danh sach
header('location: ../index.php');
