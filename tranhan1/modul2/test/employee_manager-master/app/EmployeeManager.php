<?php


namespace App;


class EmployeeManager
{
    protected string $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    function showList(): array
    {
        $data = $this->readFile();
        $arr = [];

        foreach ($data as $item) {
            $employee = new Employee($item);
            array_push($arr, $employee);
        }

        return $arr;
    }

    function add($request)
    {
        $data = $this->readFile();
        array_push($data, $request);
        $this->saveDataToFile($data);
    }

    function remove($index)
    {
        $data = $this->readFile();
        // xoa phan tu khoi mang theo chi so index
        array_splice($data, $index, 1);
        // lu lai  vao  file
        $this->saveDataToFile($data);

    }

    function saveDataToFile($data)
    {
        // chuyen doi du lieu dang mang ve json dung ham json_encode();
        $dataJson = json_encode($data);
        //ghi lai vao file dung ham file_put_content();
        file_put_contents($this->file, $dataJson);
    }

    function edit($newData, $index)
    {
        $data = $this->readFile();
        $data[$index] = $newData;
        // lu lai  vao  file
        $this->saveDataToFile($data);
    }

    function getByIndex($index): Employee
    {
        $data = $this->readFile();
        //truy xuat phan tu trong mang theo chi so index
        $item = $data[$index];

        return new Employee($item);
    }

    function readFile()
    {
        // doc du lieu tu file json
        $dataOfFile = file_get_contents($this->file);
        // chuyen doi du lieu tu json ve mang
        return json_decode($dataOfFile, true);
    }


}