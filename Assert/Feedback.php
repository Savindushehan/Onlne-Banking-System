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

if(isset($_POST['feedback']) && isset($_POST('account'))){
    function generateFeedbackId() {
        // Get the current timestamp
        $timestamp = time();
    
        // Generate a random number between 1000 and 9999
        $randomNumber = rand(1000, 9999);
    
        // Combine timestamp and random number to create Feedback_id
        $feedbackId = "FB" . $timestamp . $randomNumber;
    
        return $feedbackId;
    }
// Set the timezone to your desired timezone
date_default_timezone_set('Your_Timezone_Here');

// Get the current date and time
$Time = date('H:i:s');

// Set the timezone to your desired timezone
date_default_timezone_set('Your_Timezone_Here');

// Create a new DateTime object with the current date and time
$dateTimeObj = new DateTime();

// Format the DateTime object as a string in the desired format
$Date = $dateTimeObj->format('Y-m-d');



    
    // Example usage:
    $feedback_id = generateFeedbackId();
    $Feedback=$_POST['feedback'];
    $Account = $_POST['account'];


    $reg="INSERT INTO feedback(Feedback_id,Content,Time,Date,A_number) VALUES ('$feedback_id',' $Feedback','$Time','$Date','$Account')";

    if (mysqli_query($conn, $reg)) {
        header('Location:Userdashboard.php');
    } else {
        echo "Error: " . $reg . "<br>" . mysqli_error($conn);
    }

}else {
    echo "One or more fields are empty.";
}

mysqli_close($conn);
?>

