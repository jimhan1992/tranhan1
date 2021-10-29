<?php
include_once "app/Employee.php";
include_once "app/EmployeeManager.php";

$employeeManager = new \App\EmployeeManager('data.json');
$employees = $employeeManager->showList();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <a href="views/add.php">+Add new</a>
    <table>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Birthday</th>
            <th>Address</th>
            <th>Role</th>
            <th></th>
        </tr>

        <?php foreach ($employees as $key => $employee): ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $employee->getName() ?></td>
            <td><?php echo $employee->getBirthday() ?></td>
            <td><?php echo $employee->getAddress() ?></td>
            <td><?php echo $employee->getRole() ?></td>
            <td>
                <a onclick="return confirm('Are you sure?')" href="action/delete.php?index=<?php echo $key ?>">Delete</a>
                <a href="views/edit.php?index=<?php echo $key ?>">Update</a>
            </td>

        </tr>
        <?php endforeach; ?>
    </table>
</div>

</body>
</html>
