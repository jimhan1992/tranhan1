<?php
include_once "Employee.php";

function saveData($data)
{
    $dataJson = json_encode($data);
    file_put_contents("data.json",$dataJson);
}

function loadData()
{
    $load = file_get_contents("data.json");
    return json_decode($load, true);
}

function addNew($employee)
{
    $employees = loadData();
    array_push($employees, $employee);
    saveData ($employees);

//function convertDataToEmployee()// convert array to object
//{
//    $data = loadData();
//    $employees = [];
//    foreach ($data as $item)
//    {
//        $employee = new employee($item["name"], $item["birthDay"], $item["address"], $item["position"]);
//        array_push($employees, $employee);
//    }
//    return $employees;
}
