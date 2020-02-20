<?php


$db_host = "localhost";
$db_name = "bloggin";
$db_user = "root";
$db_password = "";
$db_table = "posts";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (mysqli_connect_errno()) {
    echo "error base de datos <br>";
    exit();
}
