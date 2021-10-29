<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "../class/Student.php";
    include "../class/StudentManager.php";

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    if (validate($_REQUEST)) {
        $student = new Student($name, $email, $phone);
        $studentManager = new StudentManager("../data/data.json");

        $studentManager->add($student);
        header("Location: ../index.php");
    }
}
?>
<?php

function validate($data): bool
{
    $errors = [];
    if ($data["name"] == "") {
        $errors["name"] = "name is require";
    } else if (strlen($data["name"]) < 8) {
        $errors["name"] = "name must be at least 8 character";
    }

    if ($data["email"] == "") {
        $errors["email"] = "email is require";
    } else if (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "wrong email format";
    }
    if ($data["phone"] == "") {
        $errors["phone"] = "phone is require";
    } else if (!preg_match("/^[0-9]{0,10}$/", $data["phone"])) {
        $errors["phone"] = "wrong phone number format";
    }
    $_SESSION["errors"] = $errors;
    if (empty($errors)) {
        return true;
    } else {
        return false;
    }
}

?>