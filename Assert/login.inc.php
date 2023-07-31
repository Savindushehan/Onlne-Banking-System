<?php
session_start();

$severName = "localhost";
$userName = "root";
$passWord = "Savi0760768629";
$dbName = "online_banking";

$conn = mysqli_connect($severName, $userName, $passWord, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    header('Location:../home.html');
}

mysqli_select_db($conn, 'online_banking');


$Username = $_POST['username'];
$Password = $_POST['password'];

$s="SELECT *
FROM registered_user
WHERE User_name='$Username' && R_password='$Password'";

    $result=mysqli_query($conn,$s);

    $num=mysqli_num_rows($result);

    if($num==1){
        header('Location:userdashboard.php');
    }else{
        header('Location:login.php');
    }

mysqli_close($conn);
?>
