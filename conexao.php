<?php

$url = "localhost";
$database = "escola";
$username = "root";
$password = "mysql";


// Conexão
$conn = mysqli_connect($url, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//echo "Connected successfully";
//mysqli_close($conn);