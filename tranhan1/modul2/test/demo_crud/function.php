<?php
const FILE_USER = "User.json";
function loadUser()
{
    $load = file_get_contents(FILE_USER);
    return json_decode($load, true);
}

function addUser($arr)
{
    $add = loadUser();
    array_push($add, $arr);
    $sever = json_encode($add, JSON_PRETTY_PRINT);
    file_put_contents(FILE_USER, $sever);
}

function severUser($arr)
{
    $arr = json_encode($arr);
    file_put_contents(FILE_USER, $arr);
}