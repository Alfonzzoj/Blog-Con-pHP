<?php include 'includes/header.php';

try {
    $db_host    = "localhost";
    $db_name    = "bloggin";
    $db_user    = "root";
    $db_pass    = "";
    $db_table   = "users";

    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (isset($connection)) {
        $query = "SELECT * FROM $db_table WHERE username=:login AND password=:password";
    } else {
        echo "Base de datos no conectada <br>";
    }
} catch (\Throwable $th) {
    //throw $th;
}
