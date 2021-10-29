<?php
include_once "User.php";
include_once "function.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_REQUEST["user_name"];
    $phone = $_REQUEST["phone"];
    $email = $_REQUEST["email"];
    $user = new User($user, $phone, $email);
    addUser($user);
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
<table>
    <tr>
        <th>STT</th>
        <th>Name User</th>
        <th> Password</th>
        <th>Email</th>
        <th></th>
        <th></th>
    </tr>
    <?php $load = loadUser()?>
    <?php foreach ($load as $key =>$value):?>
    <tr>
<td><?php echo $key +1?></td>
<td><?php echo $value["user"]?></td>
<td><?php echo $value["phone"]?></td>
<td><?php echo $value["email"]?></td>
<td><a href="edit.php?edit=<?php echo $key ?>"><button>Edit</button></a></td>
<td><a href="delete.php?delete=<?php echo $key ?>"><button>Delete</button></a></td>
    </tr>
    <?php endforeach;?>
</table>
</body>
</html>
