<?php

$severName="localhost";
$userName="root";
$passWord="Savi0760768629";
$dbName="online_banking";

$conn=mysqli_connect($severName,$userName,$passWord,$dbName);

if(!$conn){
    die("could connect database:".mysqli_connect_errno());
}

