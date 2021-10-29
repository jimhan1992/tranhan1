<?php
include_once "connect.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username      = $_POST["user_name"];
	$user_password = $_POST["user_password"];
	$email         = $_POST["email"];
}
$sql    = 'INSERT into registers (username,user_password,email) values ("'.$username.'","'.$user_password.'","'.$email.'")';
$result = mysqli_query($conn, $sql);

mysqli_free_result($result);

mysqli_close($conn);
header("location: ./index.php");
?>
