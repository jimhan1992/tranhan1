<?php
function layUser($user)
{
    //lay du lieu tu file json
    $data = file_get_contents($user);
    //chuyen du lieu thanh mang
    return json_decode($data, true);
}

function guiUser($user, $name, $email, $phone)
{
    $arr = ["name" => $name, "email" => $email, "phone" => $phone];
    $json_data = layUser($user);
    array_push($json_data, $arr);
    $arr_data = json_encode($json_data, JSON_PRETTY_PRINT);
    file_put_contents($user, $arr_data);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $user = "user.json";
    guiUser($user, $name, $email, $phone);
    $tho_tin = layUser($user);
    echo "<table style='border: 1px; width: 100%'>";
    foreach ($tho_tin as $item) {
        echo "<tr style='width: 20px'>";
        echo "<td>" . $item["name"] . "</td>";
        echo "<td>" . $item["email"] . "</td>";
        echo "<td>" . $item["phone"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}


echo "<form action='index.php'><button type='submit'>Home</button></form>";