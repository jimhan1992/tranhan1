<?php
include_once "src/Database.php";
include_once "src/ReaderManager.php";
$conn = new \Src\ReaderManager();
$display = $conn->getFullStudent();
// var_dump($display);
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
<a href="view/add.php">ADD</a>
<table>
  <tr>
    <th>STT</th>
    <th>MSV</th>
    <th>Ten</th>
    <th>Ngay Sinh</th>
    <th>Dia chi</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Anh</th>
    <th></th>
  </tr>
  <?php foreach ($display as $key => $display): ?>
  <tr>
    <td><?php echo $key + 1 ?></td>
      <td><?php echo $display['student_id'] ?></td>
      <td><?php echo $display['student_name'] ?></td>
    <td><?php echo $display['student_birthday'] ?></td>
    <td><?php echo $display['student_address'] ?></td>
    <td><?php echo $display['email'] ?></td>
    <td><?php echo $display['phone'] ?></td>
    <td><?php echo $display['image'] ?></td>
    <td>
      <a href="view/edit.php?id=<?php echo $display['student_id'] ?>">Edit</a>|
      <a onclick=" return confirm('ok!')" href="view/delete.php?id=<?php echo $display['student_id'] ?>">Delete</a>
    </td>
  </tr>
<?php endforeach?>
</table>
</body>
</html>
