<?php
include_once "Employee.php";
include_once "Function.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add new Employee</title>
</head>
<body>
<form action="" method="POST">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" placeholder="enter name"><br></td>
        </tr>
        <tr>
            <td>Birtday</td>
            <td><input type="date" name="birthDay"><br></td>
        </tr>
        <tr>
            <td>Adrress</td>
            <td><input type="text" name="address" placeholder="enter address"><br></td>
        </tr>
        <tr>
            <td>Position</td>
            <td>
                <select name="position">
                    <option value="1">Security</option>
                    <option value="2">Giám đốc</option>
                    <option value="3">Lao công</option>
                    <option value="4">Thư ký/option>
                </select><br>
            </td>
        </tr>
        <tr>
            <td><button type="submit">Tạo</button></td>
            <td>
                <a href="index.php"> <button type="button">Cancel</button></a>
            </td>
        </tr>
    </table>
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $birthDay = $_POST["birthDay"];
    $address = $_POST["address"];
    $position = $_POST["position"];

//    $employee = new Employee($name, $birthDay, $address, $position);
    $employee = [$name,$birthDay,$address,$position];
    addNew($employee);
    header("location:index.php");
   //convertDataToEmployee();
   saveData($employee);


}
?>

