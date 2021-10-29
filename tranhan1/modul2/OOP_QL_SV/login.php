<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (login($_REQUEST["name"], $_REQUEST["password"])) {
		$_SESSION["username"] = $_REQUEST["name"];
		header("location: index.php");
	} else {
		$_SESSION["LoginError"] = "Make sure you type your name and password correctly";
	}
}
if (isset($_SESSION["LoginError"])) {
	$error = $_SESSION["LoginError"];
	unset($_SESSION["LoginError"]);
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
        <link rel="stylesheet" href="css/myStyle.css">
    </head>
    <body>
    <form method="post">
        <div class="imgcontainer">
            <p style="color: red"><?php echo isset($error)?$error:"";?></p>
            <!--        <img src="img_avatar2.png" alt="Avatar" class="avatar">-->
        </div>

        <div class="container">
            <label for="name"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="name" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
    </body>
    </html>
<?php

function login($username, $password) {
	$users = loadUser();
	foreach ($users as $user) {
		if ($user["username"] == $username && $user["password"] == $password) {
			return true;
		}
	}
	return false;
}

function loadUser() {
	$load = file_get_contents("data/user.json");
	return json_decode($load, true);
}

?>