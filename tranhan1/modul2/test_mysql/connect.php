<?php
$conn = mysqli_connect("localhost", "root", "hanND92@@", "demo");
// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: ".mysqli_connect_error();
}
?>