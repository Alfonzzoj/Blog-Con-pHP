<?php

    $db_host="localhost";
    $db_name="bloggin";
    $db_user="root";
    $db_password="";

    $conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);

    $query="SELECT * FROM posts ";

    $result=mysqli_query($conn,$query);

    $dato=mysqli_fetch_row($result);



?>