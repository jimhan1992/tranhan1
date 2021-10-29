<?php
include_once '../src/Database.php';
include_once '../src/ReaderManager.php';

use Src\ReaderManager;

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $userModel = new ReaderManager();

    $student_id = $_POST['student_id'];
    $student_name = $_POST['student_name'];
    $student_birthday = $_POST['student_birthday'];
    $student_address = $_POST['student_address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $image = $_POST['image'];

    $student1 = [
        "student_id" => $student_id,
        "student_name" => $student_name,
        "student_birthday" => $student_birthday,
        "student_address" => $student_address,
        "email" => $email,
        "phone" => $phone,
        "image" => $image
    ];


    $userModel->add($student1);
    header('location: ../index.php');

}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label>Id:<br>
        <input type="text" name="student_id"><br>
    </label>
    <label>Name:<br>
        <input type="text" name="student_name"><br>
    </label>
    <label>Ngay_Sinh:<br>
        <input type="date" name="student_birthday"><br>
    </label>
    <label>Dia_chi:<br>
        <input type="text" name="student_address"><br>
    </label>
    <label>Email:<br>
        <input type="text" name="email"><br>
    </label>
    <label>Phone:<br>
        <input type="text" name="phone"><br>
    </label>
    <label>Image:<br>
        <input type="text" name="image"><br>
    </label>
    <button type="submit">Submit</button>
</form>
</body>
</html>
