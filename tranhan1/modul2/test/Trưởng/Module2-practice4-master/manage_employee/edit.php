<?php
include_once "change_info.php";
$index = $_GET['index'];
$employee = getEmployeeByIndex($index);
//var_dump($employee);
?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
              crossorigin="anonymous">
    </head>
    <body>
    <form method="post" action="">
        <fieldset>
            <legend>Creat</legend>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Surname Input</label>
                <input type="text" id="disabledTextInput" class="form-control" name="surname" placeholder="Vũ"
                       value="<?php echo $employee["surname"] ?>">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Name Input</label>
                <input type="text" id="disabledTextInput" class="form-control" name="name" placeholder="Ngọc Trưởng"
                       value="<?php echo $employee["name"] ?>">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Address Input</label>
                <input type="text" id="disabledTextInput" class="form-control" name="address"
                       placeholder="Giao Hải- Giao Thuỷ-Nam Định" value="<?php echo $employee["address"] ?>">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Birthday Input</label>
                <input type="date" id="disabledTextInput" class="form-control" name="date" placeholder="xx/yy/zzzz"
                       value="<?php echo $employee["birthday"] ?>">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Job Input</label>
                <input type="text" id="disabledTextInput" class="form-control" name="job" placeholder="Giám đốc"
                       value="<?php echo $employee["job"] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php">
                <button type="submit" class="btn btn-primary">Cancel</button>
            </a>
        </fieldset>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
            integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
            integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/"
            crossorigin="anonymous"></script>
    </body>
    </html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $job = $_POST["job"];
    $birthday = $_POST["date"];
    $employee = new employee($surname, $name, $address, $birthday, $job);
    updateInfoEmployee($index, $employee);
    header('location:index.php');
}
?>