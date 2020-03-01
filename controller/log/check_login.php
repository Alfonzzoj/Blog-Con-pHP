<?php include '/header.php';

try {
    $db_host    = "localhost";
    $db_name    = "bloggin";
    $db_user    = "root";
    $db_pass    = "";
    $db_table   = "users";

    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (isset($connection)) {
    } else {
        echo "Base de datos no conectada <br>";
    }
} catch (\Throwable $th) {
    //throw $th;
}
