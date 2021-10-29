<?php
include_once "function.php";
$edit = $_REQUEST["edit"];
$load = loadUser();
$load=array_splice($load, $edit, 1);
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
<form action="display_list.php" method="post">
    <label>
        <input type="text" name="user_name" placeholder="User_name">
    </label>
    <label>
        <input type="tel" name="phone" placeholder="Phone">
    </label>
    <label>
        <input type="email" name="email" placeholder="Email">
    </label>
    <input type="submit" value="Submit">
</form>
</body>
</html>

