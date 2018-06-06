<?php

$servername = "localhost";
$database = "contact_feedback";
$username = "root";
$password = "admin";

// Create connection

$connection = new mysqli($servername, $username, $password, $database);

// Checking connection

if (!$connection) {

    die("Connection failed - Error Number and Error Message: " . mysqli_connect_errno . " , " . mysqli_connect_error);

} /* else {

    echo "Connection successfull";

} */

?>