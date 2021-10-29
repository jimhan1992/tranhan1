<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>Username</td>
			<td>Email</td>
			<td>Phone</td>
		</tr>
<?php
require 'connect.php';
$query = mysqli_query($conn, "select * from `member`");
while ($row = mysqli_fetch_array($query)) {
	?>
					<tr>
						<td><?php echo $row['id'];?></td>
						<td><?php echo $row['username'];?></td>
						<td><?php echo $row['email'];?></td>
						<td><?php echo $row['phone'];?></td>
						<td><a href="edit_user.php?id=<?php echo $row['id'];?>">Edit</a></td>
						<td><a href="delete_user.php?id=<?php echo $row['id'];?>">Delete</a></td>
					</tr>
	<?php
}
?>
	</table>
</body>
</html>