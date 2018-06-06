<?php

$servername = "localhost";
$database = "contact_feedback";
$username = "root";
$password = "admin";

// Create connection

$connection = new mysqli_connect($servername, $database, $username, $password);

// Checking connection

if (!$connection) {

    echo "<script>console.log('Fail: Could not connect to MySQL be built.');</script>";
    echo "<script>console.log('Debug - Error Number: " . mysqli_connect_errno() . "');</script>";
    echo "<script>console.log('Debug - Error Message: " . mysqli_connect_error() . "');</script>";

    exit;

    die("Connection failed: " . $connection->connect_error);

} else {

    echo "Connection successfull";

}

?>