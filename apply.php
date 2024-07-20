<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $followers = $_POST['followers'];
    $email = $_POST['email'];
    $posting_time = $_POST['posting-time'];
    $platforms = implode(", ", $_POST['platforms']);
    $message = $_POST['message'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO influencers (fullname, followers, email, posting_time, platforms, message, gender)
    VALUES ('$fullname', '$followers', '$email', '$posting_time', '$platforms', '$message', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
