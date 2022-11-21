<?php

function makeSqlQuery($sqlStatement)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecommerce";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Mysql connection failed :" . mysqli_connect_error());
    }
    $result = mysqli_query($conn, $sqlStatement);
    return $result;
}
