<?php include '../database/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM $db_table WHERE id =$id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query failded");
    } else {
        header("Location:list.php");
    }
}
