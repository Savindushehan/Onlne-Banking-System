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

if (isset($_POST['account']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['phone'])) {
    $Account = $_POST['account'];
    $Username = $_POST['username'];
    $Password = $_POST['password'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];

    $reg = "INSERT INTO registered_user (A_number, User_name, R_password, Email, Phone) VALUES ('$Account', '$Username', '$Password', '$Email', '$Phone')";

    if (mysqli_query($conn, $reg)) {
        header('Location:login.php');
    } else {
        echo "Error: " . $reg . "<br>" . mysqli_error($conn);
    }
} else {
    echo "One or more fields are empty.";
}

mysqli_close($conn);
?>
