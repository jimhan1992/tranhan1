<?php
include_once 'employee.php';
function saveData($filename, $data)
{
    $dataJson = json_encode($data);
    file_put_contents($filename, $dataJson);
}

function loadData()
{
    $dataOutput = file_get_contents('data.json');
    return json_decode($dataOutput, true);
}

function addEmployee($employee)
{
    $data = loadData();
    array_push($data, $employee);
    saveData("data.json", $data);
}

function removeEmployee($index)
{
    $data = loadData();
    array_splice($data, $index, 1);
    saveData("data.json", $data);
}

function getEmployeeByIndex($index)
{
    $data = loadData();
    return $data[$index];
}

function updateInfoEmployee($index, $employee)
{
    $data = loadData();
    $data[$index] = [
        "surname" => $employee->getSurname(),
        "name" => $employee->getName(),
        "birthday" => $employee->getBirthday(),
        "address" => $employee->getAddress(),
        "job" => $employee->getJob()
    ];
    saveData("data.json", $data);
}

function convertUser()
{
    $data = loadData();
    $employees = [];
    foreach ($data as $item) {
        $employee = new employee($item['surname'], $item['name'], $item['birthday'], $item['address'], $item['job']);
        array_push($employees, $employee);
    }
    return $employees;
}
