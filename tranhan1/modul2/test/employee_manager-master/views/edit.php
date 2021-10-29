<?php
include_once "../app/Employee.php";
include_once "../app/EmployeeManager.php";
$index = $_REQUEST['index'];

$employeeManager = new \App\EmployeeManager('../data.json');
$employeeUpdate = $employeeManager->getByIndex($index);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">
    <form action="../action/update.php?index=<?php echo $index ?>" method="post">
        <table>
            <tr>
                <td>FirstName</td>
                <td>
                    <input type="text" value="<?php echo $employeeUpdate->getFirstName() ?>" name="firstName">
<!--                    <input type="text" name="index" va hidden>-->
                </td>
            </tr>
            <tr>
                <td>LastName</td>
                <td><label>
                        <input type="text" value="<?php echo $employeeUpdate->getLastName() ?>" name="lastName">
                    </label></td>
            </tr>
            <tr>
                <td>Birthday</td>
                <td><label>
                        <input type="date" value="<?php echo $employeeUpdate->getBirthday() ?>" name="birthday">
                    </label></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><label>
                        <input type="text" name="address" value="<?php echo $employeeUpdate->getAddress() ?>">
                    </label></td>
            </tr>
            <tr>
                <td>Role</td>
                <td>
                    <label for=""></label><select name="role" id="">
                        <option
                            <?php if ($employeeUpdate->getRole() == "Hoc sinh"): ?>
                            selected
                            <?php endif; ?>
                                value="Hoc sinh">Hoc sinh
                        </option>
                        <option
                            <?php if ($employeeUpdate->getRole() == "Giao vien"): ?>
                                selected
                            <?php endif; ?>

                                value="Giao vien">Giao vien</option>
                        <option
                            <?php if ($employeeUpdate->getRole() == "Giao vu"): ?>
                                selected
                            <?php endif; ?>
                                value="Giao vu">Giao vu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button>Update</button>
                </td>
            </tr>
        </table>
    </form>
    <a href="../index.php"><- List Employees</a>
</div>
</body>
</html>
