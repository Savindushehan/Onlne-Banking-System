<?php

session_start();

$severName = "localhost";
$userName = "root";
$passWord = "Savi0760768629";
$dbName = "online_banking";

$conn = mysqli_connect($severName, $userName, $passWord, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    header("Location:../home.html");
    exit();
}

mysqli_select_db($conn, 'online_banking');

if