<?php
session_start();
include_once "../action/add.php";
if (isset($_SESSION["errors"])) {
    $errors = $_SESSION["errors"];
    unset($_SESSION["errors"]);
}

?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Students Manager</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
              crossorigin="anonymous">
    </head>
    <body>
    <h2>Students Manager</h2>
    <form method="post">

        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col"><label for="name">Name</label></th>
                <th scope="col"><label for="email">Email</label></th>
                <th scope="col"><label for="phone">Phone</label></th>
                <th scope="col">
                    <button class="btn btn-primary" type="submit">ADD</button>
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="text" name="name" id="name" class="form-control <?php echo isset($errors["name"])?"is-invalid":""?>">
                    <p class="text-danger"><?php echo $errors["name"] ?? ""; ?></p>
                </td>
                <td><input type="text" name="email" id="email" class="form-control <?php echo isset($errors["email"])?"is-invalid":""?>">
                    <p class="text-danger"><?php echo $errors["email"] ?? ""; ?></p>
                </td>
                <td><input type="text" name="phone" id="phone" class="form-control <?php echo isset($errors["phone"])?"is-invalid":""?>">
                    <p class="text-danger"><?php echo $errors["phone"] ?? ""; ?></p>
                </td>
            </tr>
            </tbody>
        </table>

    </form>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>

    </body>
    </html>
<?php

?>