<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'hanND92@@';
$dbname = 'demo_crud';
$conn   = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
	echo "ket noi ".mysqli_connect_errno();
}

?>
