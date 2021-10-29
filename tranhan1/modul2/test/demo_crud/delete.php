<?php
include_once "function.php";
$delete = $_REQUEST["delete"];
$load = loadUser();
array_splice($load, $delete, 1);
severUser($load);
header("Location: display_list.php");